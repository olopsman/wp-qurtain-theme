var bodyEl = document.body,
  openbtn = document.getElementById( 'nav-open-button' ),
  closebtn = document.getElementById( 'close-button' ),
  isOpen = false;

openbtn.addEventListener( 'click', toggleMenu );
closebtn.addEventListener( 'click', toggleMenu );

function toggleMenu(){
  if( isOpen ) {
    classie.remove( bodyEl, 'show-menu' );
  }
  else {
    classie.add( bodyEl, 'show-menu' );
  }
  isOpen = !isOpen;
}
