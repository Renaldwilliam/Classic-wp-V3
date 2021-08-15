jQuery(document).ready(function () {
  const Paginacao = {
    selectDay() {
      jQuery('#semana li').click(function () {
        Paginacao.verifyActive()
        Paginacao.verifyActiveBox()
        caixaBtn = document.getElementsByClassName('btn-anuncio')
        caixaProgramacao = document.getElementsByClassName('programacao-dia')
        console.log(caixaProgramacao)

        dia = jQuery(this).attr('day')
        for (let index = 0; index < caixaProgramacao.length; index++) {
          const element = caixaProgramacao[index]
          if (jQuery(element).attr('id') === dia) {
            jQuery(element).removeClass('d-none')
          }
        }

        jQuery(this).addClass('active-li')
      })
    },
    verifyActive() {
      caixaBtn = document.getElementsByClassName('btn-anuncio')
      for (let index = 0; index < caixaBtn.length; index++) {
        const element = caixaBtn[index]
        jQuery(element).removeClass('active-li')
      }
    },
    activeForDay() {
      let day = new Date().getDay()
      console.log(day)
      switch (day) {
        case 0:
          jQuery('.domingo').addClass('active-li')
          jQuery('#domingo').removeClass('d-none')
          break
        case 1:
          jQuery('.segunda').addClass('active-li')
          jQuery('#segunda').removeClass('d-none')
          break
        case 2:
          jQuery('.terca').addClass('active-li')
          jQuery('#terca').removeClass('d-none')
          break
        case 3:
          jQuery('.quarta').addClass('active-li')
          jQuery('#quarta').removeClass('d-none')
          break
        case 4:
          jQuery('.quinta').addClass('active-li')
          jQuery('#quinta').removeClass('d-none')
          break
        case 5:
          jQuery('.sexta').addClass('active-li')
          jQuery('#sexta').removeClass('d-none')
          break
        case 6:
          jQuery('.sabado').addClass('active-li')
          jQuery('#sabado').removeClass('d-none')
      }
    },
    verifyActiveBox() {
      console.log('aquiespta')
      caixaProgramacao = document.getElementsByClassName('programacao-dia')
      console.log(caixaProgramacao)
      for (let index = 0; index < caixaProgramacao.length; index++) {
        const element = caixaProgramacao[index]
        console.log(element)
        jQuery(element).addClass('d-none')
      }
    }
  }
  Paginacao.selectDay()
  Paginacao.activeForDay()
})
