jQuery(document).ready(function () {
  const MenuMobile = {
    open() {
      jQuery(".menu-mobile").click(function () {
        jQuery(".my-overlay").toggle();
        jQuery("#menu-mobile").toggle(1000);
      });
    },
    close() {
      jQuery(".fa-window-close").click(function () {
        jQuery(".my-overlay").toggle();
        jQuery("#menu-mobile").toggle(1000);
      });
    },
  };

  MenuMobile.open();
  MenuMobile.close();
});
