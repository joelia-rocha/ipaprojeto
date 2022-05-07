window.addEventListener('scroll', function(){
  const header = document.querySelector('header');
  header.classList.toggle("sticky", window.scrollY > 0);
});

function toggle(){
  const header = document.querySelector('header');
  const navigation = document.querySelector('navigation');
  header.classList.toggle('active'); 
  navigation.classList.toggle('active'); 
}

/*function toggleMenu(){
  const toggle = document.querySelector('toggle');
  toggle.classList.toggle('active');
}/*/
