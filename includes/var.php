<!--Scroll Top Start-->
<!-- <span class="scroll-top-arrow"><i class="fas fa-angle-up"></i></span> -->
<!--Scroll Top End-->

<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery3.1.1.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
<!-- <script src="vendor/js/owl.carousel.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script> -->
<!-- <script src="vendor/js/bootstrap.min.js"></script> -->
<!-- <script src="vendor/js/jquery-3.6.0.min.js"></script> -->
<!-- Plugin Js -->
<!-- <script src="vendor/js/jquery.appear.js"></script>
<script src="vendor/js/jquery.fancybox.min.js"></script>-->
<script src="assets/js/swiper-bundle.min.js"></script>
<!-- <script src="assets/js/lightcase.js"></script> -->
<!-- <script src="vendor/js/parallaxie.min.js"></script> -->
<!-- <script src="vendor/js/wow.min.js"></script> -->

<!--Tilt Js-->
<!-- <script src="assets/js/tilt.jquery.min.js"></script>
<script src="assets/js/slick.js"></script>
<script src="vendor/js/slick.min.js"></script> -->

<!--contact form-->
<!-- <script src="vendor/js/contact_us.js"></script> -->
<!-- custom script-->
<script src="assets/js/script.js"></script>

<script>
  const lightbox = GLightbox({
  touchNavigation: true,
  loop: true,
  width: "90vw",
  height: "90vh"
});
</script>


<!-- remove location div from popup -->
<script>
$(document).ready(function(){
  $(".location-remove").click(function(){
    $("#div1").remove();
  });
});

$(document).ready(function(){
  $(".location-remove-1").click(function(){
    $("#div2").remove();
  });
});
</script>
<!-- remove location div from popup end -->

<!-- search filter start -->
<script>
   const searchContainer = document.querySelector('.search-container');
const searchBar = document.querySelector('.search-bar');
const tabs = document.querySelectorAll('.tab');

document.addEventListener('click', (event) => {
  const clickedElement = event.target;

  if (!searchContainer.contains(clickedElement)) {
    closeTabs();
  }
});

searchBar.addEventListener('click', (event) => {
  event.stopPropagation();
  searchContainer.classList.toggle('active');
});

tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    closeOtherTabs(tab);
    tab.classList.toggle('active');
    const tabContent = tab.querySelector('.tab-content');
    tabContent.style.display = tab.classList.contains('active') ? 'block' : 'none';
  });
});

function closeTabs() {
  tabs.forEach(tab => {
    tab.classList.remove('active');
    const tabContent = tab.querySelector('.tab-content');
    tabContent.style.display = 'none';
  });
}

function closeOtherTabs(selectedTab) {
  tabs.forEach(otherTab => {
    if (otherTab !== selectedTab) {
      otherTab.classList.remove('active');
      const otherTabContent = otherTab.querySelector('.tab-content');
      otherTabContent.style.display = 'none';
    }
  });
}
  </script>
<!-- search filter end -->