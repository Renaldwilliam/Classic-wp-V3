jQuery(document).ready(function () {
  const BtnActions = {
    btnScrollUp() {
      jQuery('#scroll-up').click(function () {
        jQuery('html, body').animate({ scrollTop: 0 }, 100)
      })
    },
    btnOpenMenuSide() {
      jQuery('.menu').click(function () {
        jQuery('#menu-mobile').css('display', 'flex')
      })
    },
    btnCloseMenu() {
      jQuery('.close').click(function () {
        jQuery('#menu-mobile').css('display', 'none')
      })
    }
  }
  BtnActions.btnScrollUp()
  BtnActions.btnOpenMenuSide()
  BtnActions.btnCloseMenu()
})
