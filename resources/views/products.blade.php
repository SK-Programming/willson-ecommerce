@include('layout\nav')
<title>Explore</title>
<link rel="stylesheet" href="css/prod.css">
 {{-- header --}}
 @include('layout\slider')


{{-- 
<div class="container d-flex justify-content-center goup">
    <div class="w-100 cursor position-relative">
        <input type="text" class="pl-5 pr-5 form-control gc">
        <i class="position-absolute fas fa-search" style="left: 10px; top: 50%; transform: translateY(-50%);"></i>
        <i class="fa-solid fa-sliders position-absolute" style="right: 10px; top: 50%; transform: translateY(-50%);"></i>
    </div>
</div> --}}




<div class="container prod-nav d-flex justify-content-between align-items-center ">

  <div class="d-flex sm-tag align-items-center ">
    <div class="bor">
    <i class="px-3 bi bi-grid-fill gr" id="grid"></i>
  </div>
  <div class="bor">
    <i class="px-3 bi bi-list-ul" id="list"></i>
  </div>
  <div class="bor">
        <i class="px-3 fa-solid fa-sliders" onclick="opean()"></i>    
  </div>
      </div>

<div class="d-flex justify-content-end align-items-center ">
<div class="search-box">
  <button class="btn-search"><i class="fas fa-search"></i></button>
  <input type="text" class="input-search" placeholder="Type to Search...">
</div>

</div>

</div>
<div class="container gap-2 mt-2 d-flex show-tag">

  </div>
{{-- products --}}


  

<div class="container mt-5 card-grid-cont grid-sec">
    

    <div class="card dark" style="width: 18rem;">
      <div class="card-img-top-cap" style="background-image: url('images/nike-shoe.jpg');">
      </div>
      <div class="card-body">
        <h5 class="card-title">Nike Shoes</h5>
        <p class="card-text">Price : $140</p>
        <div class="d-flex justify-content-between align-items-end ">
        <div class="gap-3 d-flex">
        <a href="#" class="gap-1 p-2 btn btn-red d-flex align-items-center">
            <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
        <span class="animate__animated animate__fadeIn">Add To Card</span>
        </a>
        <a href="#" class="gap-1 p-2 btn btn-red d-flex align-items-center">
            <i class="fa-solid fa-eye" style="color: #ffffff;"></i>
        <span class="animate__animated animate__fadeIn">View Product</span>
        </a>
      </div>
<div class="gap-1 d-flex align-items-center star">
    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
    <span>4.8</span>
</div>
      
    </div>
      </div>
    </div>

    

    <div class="card dark" style="width: 18rem;">
      <div class="card-img-top-cap" style="background-image: url('images/nike-shoe.jpg');">
      </div>
      <div class="card-body">
        <h5 class="card-title">Nike Shoes</h5>
        <p class="card-text">Price : $140</p>
        <div class="d-flex justify-content-between align-items-end ">
        <div class="gap-3 d-flex">
        <a href="#" class="gap-1 p-2 btn btn-red d-flex align-items-center">
            <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
        <span class="animate__animated animate__fadeIn">Add To Card</span>
        </a>
        <a href="#" class="gap-1 p-2 btn btn-red d-flex align-items-center">
            <i class="fa-solid fa-eye" style="color: #ffffff;"></i>
        <span class="animate__animated animate__fadeIn">View Product</span>
        </a>
      </div>
<div class="gap-1 d-flex align-items-center star">
    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
    <span>4.8</span>
</div>
      
    </div>
      </div>
    </div>

    

    <div class="card dark" style="width: 18rem;">
      <div class="card-img-top-cap" style="background-image: url('images/nike-shoe.jpg');">
      </div>
      <div class="card-body">
        <h5 class="card-title">Nike Shoes</h5>
        <p class="card-text">Price : $140</p>
        <div class="d-flex justify-content-between align-items-end ">
        <div class="gap-3 d-flex">
        <a href="#" class="gap-1 p-2 btn btn-red d-flex align-items-center">
            <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
        <span class="animate__animated animate__fadeIn">Add To Card</span>
        </a>
        <a href="#" class="gap-1 p-2 btn btn-red d-flex align-items-center">
            <i class="fa-solid fa-eye" style="color: #ffffff;"></i>
        <span class="animate__animated animate__fadeIn">View Product</span>
        </a>
      </div>
<div class="gap-1 d-flex align-items-center star">
    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
    <span>4.8</span>
</div>
      
    </div>
      </div>
    </div>

    

    <div class="card dark" style="width: 18rem;">
      <div class="card-img-top-cap" style="background-image: url('images/nike-shoe.jpg');">
      </div>
      <div class="card-body">
        <h5 class="card-title">Nike Shoes</h5>
        <p class="card-text">Price : $140</p>
        <div class="d-flex justify-content-between align-items-end ">
        <div class="gap-3 d-flex">
        <a href="#" class="gap-1 p-2 btn btn-red d-flex align-items-center">
            <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
        <span class="animate__animated animate__fadeIn">Add To Card</span>
        </a>
        <a href="#" class="gap-1 p-2 btn btn-red d-flex align-items-center">
            <i class="fa-solid fa-eye" style="color: #ffffff;"></i>
        <span class="animate__animated animate__fadeIn">View Product</span>
        </a>
      </div>
<div class="gap-1 d-flex align-items-center star">
    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
    <span>4.8</span>
</div>
      
    </div>
      </div>
    </div>
    <div class="card dark" style="width: 18rem;">
      <div class="card-img-top-cap" style="background-image: url('images/nike-shoe.jpg');">
      </div>
      <div class="card-body">
        <h5 class="card-title">Nike Shoes</h5>
        <p class="card-text">Price : $140</p>
        <div class="d-flex justify-content-between align-items-end ">
        <div class="gap-3 d-flex">
        <a href="#" class="gap-1 p-2 btn btn-red d-flex align-items-center">
            <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
        <span class="animate__animated animate__fadeIn">Add To Card</span>
        </a>
        <a href="#" class="gap-1 p-2 btn btn-red d-flex align-items-center">
            <i class="fa-solid fa-eye" style="color: #ffffff;"></i>
        <span class="animate__animated animate__fadeIn">View Product</span>
        </a>
      </div>
<div class="gap-1 d-flex align-items-center star">
    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
    <span>4.8</span>
</div>
      
    </div>
      </div>
    </div>
    <div class="card dark" style="width: 18rem;">
      <div class="card-img-top-cap" style="background-image: url('images/nike-shoe.jpg');">
      </div>
      <div class="card-body">
        <h5 class="card-title">Nike Shoes</h5>
        <p class="card-text">Price : $140</p>
        <div class="d-flex justify-content-between align-items-end ">
        <div class="gap-3 d-flex">
        <a href="#" class="gap-1 p-2 btn btn-red d-flex align-items-center">
            <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
        <span class="animate__animated animate__fadeIn">Add To Card</span>
        </a>
        <a href="#" class="gap-1 p-2 btn btn-red d-flex align-items-center">
            <i class="fa-solid fa-eye" style="color: #ffffff;"></i>
        <span class="animate__animated animate__fadeIn">View Product</span>
        </a>
      </div>
<div class="gap-1 d-flex align-items-center star">
    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
    <span>4.8</span>
</div>
      
    </div>
      </div>
    </div>
    <div class="card dark" style="width: 18rem;">
      <div class="card-img-top-cap" style="background-image: url('images/nike-shoe.jpg');">
      </div>
      <div class="card-body">
        <h5 class="card-title">Nike Shoes</h5>
        <p class="card-text">Price : $140</p>
        <div class="d-flex justify-content-between align-items-end ">
        <div class="gap-3 d-flex">
        <a href="#" class="gap-1 p-2 btn btn-red d-flex align-items-center">
            <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
        <span class="animate__animated animate__fadeIn">Add To Card</span>
        </a>
        <a href="#" class="gap-1 p-2 btn btn-red d-flex align-items-center">
            <i class="fa-solid fa-eye" style="color: #ffffff;"></i>
        <span class="animate__animated animate__fadeIn">View Product</span>
        </a>
      </div>
<div class="gap-1 d-flex align-items-center star">
    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
    <span>4.8</span>
</div>
      
    </div>
      </div>
    </div>
    <div class="card dark" style="width: 18rem;">
      <div class="card-img-top-cap" style="background-image: url('images/nike-shoe.jpg');">
      </div>
      <div class="card-body">
        <h5 class="card-title">Nike Shoes</h5>
        <p class="card-text">Price : $140</p>
        <div class="d-flex justify-content-between align-items-end ">
        <div class="gap-3 d-flex">
        <a href="#" class="gap-1 p-2 btn btn-red d-flex align-items-center">
            <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
        <span class="animate__animated animate__fadeIn">Add To Card</span>
        </a>
        <a href="#" class="gap-1 p-2 btn btn-red d-flex align-items-center">
            <i class="fa-solid fa-eye" style="color: #ffffff;"></i>
        <span class="animate__animated animate__fadeIn">View Product</span>
        </a>
      </div>
<div class="gap-1 d-flex align-items-center star">
    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
    <span>4.8</span>
</div>
      
    </div>
      </div>
    </div>

  </div>


<div class="container gap-4 flex-column d-flex align-items-center list-cont d-none justify-content-evenly">
  
  
  <div class="list-card dark">
    <img src="images/nike-shoe.jpg" alt="" >
    
    <div class="py-3 mx-3 d-flex flex-column justify-content-between card-body">
      <div class="">
      <h4 class="card-title text-light">Nike Shoes</h4>
      <p class="card-text text-light">Price : $140</p>
    </div>

      <div class="d-flex justify-content-between align-items-end ">
      <div class="gap-3 d-flex">
      <a href="#" class="gap-1 p-2 btn btn-red d-flex align-items-center">
          <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
      <span class="animate__animated animate__fadeIn">Add To Card</span>
      </a>
      <a href="#" class="gap-1 p-2 btn btn-red d-flex align-items-center">
          <i class="fa-solid fa-eye" style="color: #ffffff;"></i>
      <span class="animate__animated animate__fadeIn">View Product</span>
      </a>
      </div>
    </div>
  </div>
</div>


  
  <div class="list-card dark">
    <img src="images/nike-shoe.jpg" alt="" >
    
    <div class="py-3 mx-3 d-flex flex-column justify-content-between card-body">
      <div class="">
      <h4 class="card-title text-light">Nike Shoes</h4>
      <p class="card-text text-light">Price : $140</p>
    </div>

      <div class="d-flex justify-content-between align-items-end ">
      <div class="gap-3 d-flex">
      <a href="#" class="gap-1 p-2 btn btn-red d-flex align-items-center">
          <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
      <span class="animate__animated animate__fadeIn">Add To Card</span>
      </a>
      <a href="#" class="gap-1 p-2 btn btn-red d-flex align-items-center">
          <i class="fa-solid fa-eye" style="color: #ffffff;"></i>
      <span class="animate__animated animate__fadeIn">View Product</span>
      </a>
      </div>
    </div>
  </div>
</div>



</div>



  
  <div class="d-flex justify-content-center">

		<div class="pagination">
			<span class="page-btn page-step" data-shown="1">&laquo;</span>
			<a href="#page-1" class="page-btn page-step" data-shown="2">&laquo;</a>
			<a href="#page-2" class="page-btn page-step" data-shown="3">&laquo;</a>
			<a href="#page-3" class="page-btn page-step" data-shown="4">&laquo;</a>
			<a href="#page-4" class="page-btn page-step" data-shown="5">&laquo;</a>
			<!-- Previous -->

			<a href="#page-1" id="page-1" class="page-btn">1</a>
			<a href="#page-2" id="page-2" class="page-btn">2</a>
			<a href="#page-3" id="page-3" class="page-btn">3</a>
			<a href="#page-4" id="page-4" class="page-btn">4</a>
			<a href="#page-5" id="page-5" class="page-btn">5</a>
			<!-- Page numbers -->

			<a href="#page-2" class="page-btn page-step" data-shown="1">&raquo;</a>
			<a href="#page-3" class="page-btn page-step" data-shown="2">&raquo;</a>
			<a href="#page-4" class="page-btn page-step" data-shown="3">&raquo;</a>
			<a href="#page-5" class="page-btn page-step" data-shown="4">&raquo;</a>
			<span class="page-btn page-step" data-shown="5">&raquo;</span>
			<!-- Next -->
		</div>
	</div>
</div>

    
    

  </div>






{{-- filter side bar --}}
<div class="filter" id="filter">
  <div class="flex-column d-flex ">
  <div class="d-flex justify-content-end">
 
    <svg width="18" height="18" class="mx-3 my-2 mt-3 " onclick="cloase()" id="closee" viewBox="0 0 18 18" fill="#FFF" xmlns="http://www.w3.org/2000/svg" onclick="closeSdbar()">
      <path d="M10.4099 9L16.7099 2.71C16.8982 2.5217 17.004 2.2663 17.004 2C17.004 1.7337 16.8982 1.47831 16.7099 1.29C16.5216 1.1017 16.2662 0.995911 15.9999 0.995911C15.7336 0.995911 15.4782 1.1017 15.2899 1.29L8.99994 7.59L2.70994 1.29C2.52164 1.1017 2.26624 0.995911 1.99994 0.995911C1.73364 0.995911 1.47824 1.1017 1.28994 1.29C1.10164 1.47831 0.995847 1.7337 0.995847 2C0.995847 2.2663 1.10164 2.5217 1.28994 2.71L7.58994 9L1.28994 15.29C1.19621 15.383 1.12182 15.4936 1.07105 15.6154C1.02028 15.7373 0.994141 15.868 0.994141 16C0.994141 16.132 1.02028 16.2627 1.07105 16.3846C1.12182 16.5064 1.19621 16.617 1.28994 16.71C1.3829 16.8037 1.4935 16.8781 1.61536 16.9289C1.73722 16.9797 1.86793 17.0058 1.99994 17.0058C2.13195 17.0058 2.26266 16.9797 2.38452 16.9289C2.50638 16.8781 2.61698 16.8037 2.70994 16.71L8.99994 10.41L15.2899 16.71C15.3829 16.8037 15.4935 16.8781 15.6154 16.9289C15.7372 16.9797 15.8679 17.0058 15.9999 17.0058C16.132 17.0058 16.2627 16.9797 16.3845 16.9289C16.5064 16.8781 16.617 16.8037 16.7099 16.71C16.8037 16.617 16.8781 16.5064 16.9288 16.3846C16.9796 16.2627 17.0057 16.132 17.0057 16C17.0057 15.868 16.9796 15.7373 16.9288 15.6154C16.8781 15.4936 16.8037 15.383 16.7099 15.29L10.4099 9Z" fill="#FFFFFF"/>
      </svg>
    
  </div>
<h3 class="mx-3 text-light">Category</h3>

<div class="gap-2 mx-3 mt-2 d-flex">
<p class="px-3 py-1 tagg">Shoes </p>
<p class="px-3 py-1 tagg">Bottle </p>
</div>



</div>
  
</div>

  


  <script>

const tags = document.querySelectorAll('.tagg');
const showTagContainer = document.querySelector('.show-tag');

// Function to toggle the 'selected' class and update the show container
function toggleTag(tag) {
  tag.classList.toggle('selected');
  updateShowTags();
}

// Function to update the show container
function updateShowTags() {
  showTagContainer.innerHTML = '';
  tags.forEach(tag => {
    if (tag.classList.contains('selected')) {
      const showTag = document.createElement('p');
      showTag.textContent = tag.textContent;
      showTag.classList.add('px-3', 'py-1', 'tagg', 'selected');
      
      const closeIcon = document.createElement('span');
      closeIcon.textContent = 'x';
      closeIcon.classList.add('close-icon');
      closeIcon.addEventListener('click', () => {
        tag.classList.remove('selected');
        updateShowTags();
      });
      
      showTag.appendChild(closeIcon);
      showTagContainer.appendChild(showTag);
      
      // Add event listener to the tag displayed in the show container
      showTag.addEventListener('click', () => {
        toggleTag(tag);
      });
    }
  });
}

// Add event listener to the show container
showTagContainer.addEventListener('click', (event) => {
  const clickedElement = event.target;
  if (clickedElement.classList.contains('close-icon')) {
    // If 'x' icon in the show container is clicked, find and remove the corresponding tag in the original container
    const tagName = clickedElement.parentElement.textContent;
    const originalTag = [...tags].find(tag => tag.textContent === tagName);
    if (originalTag) {
      originalTag.classList.remove('selected');
      updateShowTags();
    }
  }
});

// Add event listeners to tags in the original container to toggle their selection and update the show container
tags.forEach(tag => {
  tag.addEventListener('click', () => {
    toggleTag(tag);
  });
});


const listIcon = document.getElementById('list');
const gridIcon = document.getElementById('grid');
  const section = document.querySelector('.card-grid-cont');
  const sectio = document.querySelector('.list-cont');

  listIcon.addEventListener('click', () => {
    section.classList.add('d-none');
    sectio.classList.remove('d-none');
  });

  gridIcon.addEventListener('click', () => {
    section.classList.remove('d-none');
    sectio.classList.add('d-none');
  });


  </script>
  