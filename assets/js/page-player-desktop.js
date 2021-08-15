jQuery(document).ready(function () {
  let volumeAtual = 50
  let segundos = 0
  let minutos = 0
  let horas = 0
  let inicia

  let audio = document.getElementById('link-streaming')
  audio.volume = volumeAtual / 100

  jQuery('#menos-e-mais').css('height', `${volumeAtual}%`)

  const Player = {
    aumenteVolume() {
      jQuery('#volMais').click(function () {
        console.log('aumentando o volume')

        jQuery('#volume-player').show(350)

        volumeAtual += 5

        audio.volume = volumeAtual / 100

        if (volumeAtual >= 100) {
          volumeAtual = 100
        }

        jQuery('#menos-e-mais').css('height', `${volumeAtual}%`)

        //Player.hideVolume()
      })
    },
    diminueVolume() {
      jQuery('#volMenos').click(function () {
        console.log('abaixando o volume')
        jQuery('#volume-player').show(350)

        volumeAtual -= 5
        audio.volume = volumeAtual / 100

        if (volumeAtual <= 0) {
          volumeAtual = 0
        }

        jQuery('#menos-e-mais').css('height', `${volumeAtual}%`)
      })
    },

    play() {
      jQuery('#btnPlay').click(function () {
        if (jQuery('#btnPlay').hasClass('fa-play')) {
          jQuery('#btnPlay').removeClass('fa-play')
          Player.preload()

          setTimeout(function () {
            if (audio.attributes.src.value === '') {
              alert('Rádio indisponível no momento tente novamente mas tarde.')
              window.location.reload()
            } else {
              audio.play()
            }
            Player.hidePreload()
            jQuery('#btnPlay').addClass('fa-pause')
          }, 1000)

          Player.iniciarCronometro()
        } else {
          jQuery('#btnPlay').addClass('fa-play')
          jQuery('#btnPlay').removeClass('fa-pause')

          Player.pausarCronometro()

          audio.pause()
          audio.load()
        }
      })
    },

    hideVolume() {
      setTimeout(function () {
        jQuery('#volume-player').hide()
      }, 5000)
    },

    muted() {
      jQuery('.box-muted').click(function () {
        if (jQuery('.box-muted i').hasClass('fa-volume-up')) {
          jQuery('.box-muted i').removeClass('fa-volume-up')
          jQuery('.box-muted i').addClass('fa-volume-mute')

          jQuery('#menos-e-mais').css('height', `${0}%`)
          audio.muted = true
        } else {
          jQuery('.box-muted i').removeClass('fa-volume-mute')
          jQuery('.box-muted i').addClass('fa-volume-up')

          audio.muted = false
          jQuery('#menos-e-mais').css('height', `${volumeAtual}%`)
        }
      })
    },

    iniciarCronometro() {
      inicia = setInterval(function () {
        segundos += 1
        if (segundos == 60) {
          segundos = 0
          minutos += 1
        }

        if (minutos == 60) {
          minutos = 0
          horas += 1
        }

        jQuery('#cronometro').html(
          `${('00' + horas).slice(-2)}:${('00' + minutos).slice(-2)}:${(
            '00' + segundos
          ).slice(-2)}`
        )
      }, 1000)
    },

    pausarCronometro() {
      clearInterval(inicia)

      horas = 0
      minutos = 0
      segundos = 0

      jQuery('#cronometro').html(
        `${('00' + horas).slice(-2)}:${('00' + minutos).slice(-2)}:${(
          '00' + segundos
        ).slice(-2)}`
      )
    },

    preload() {
      jQuery('#btnPlay').hide()
      jQuery('.img-load').show()
    },

    hidePreload() {
      jQuery('#btnPlay').show()
      jQuery('.img-load').hide()
    },

    autoPlay() {
      Player.preload()

      setTimeout(function () {
        if (audio.attributes.src.value === '') {
          alert('Rádio indisponível no momento tente novamente mas tarde.')
          window.location.reload()
        } else {
          Player.hidePreload()
          jQuery('#btnPlay').removeClass('fa-play')
          jQuery('#btnPlay').addClass('fa-pause')
          Player.iniciarCronometro()
          audio.play()
        }
      }, 2100)
    }
  }

  const Programacao = {
    getProgramacao() {
      let url = `http://${window.location.hostname}/wp-json/api/v1/programacao`

      jQuery.get(url, function (data) {
        jQuery('#programacao').html(data.programacao.nomePrograma)
        jQuery('#locutor').html(`com: ${data.programacao.locutor}`)
        let srcImagem = jQuery('#fotoPerfil').attr('src')
        if (data.programacao.foto === '') {
          // jQuery('#fotoPerfil').attr('src','https://images.pexels.com/photos/6318/smartphone-technology-music-headphones.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260' );
        } else {
          jQuery('#fotoPerfil').attr('src', data.programacao.foto)
        }
      })

      console.log(url)
    }
  }

  getProgramacao = setInterval(function () {
    //Programacao.getProgramacao()
  }, 3000)

  Player.hideVolume()
  Player.aumenteVolume()
  Player.diminueVolume()
  Player.play()
  Player.muted()
  Player.autoPlay()
})
