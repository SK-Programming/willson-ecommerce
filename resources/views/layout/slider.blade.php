

<div class="slider__warpper">
    <div class="flex__container flex--pikachu flex--active" data-slide="1">
      <div class="flex__item flex__item--left">
        <div class="flex__content">
          <p class="text--sub">Men's Baseball Cleats</p>
          <h1 class="text--big">Jordan Retro</h1>
          <p class="text--normal">Bringing the iconic design of the Air Jordan 1 to the ballpark, the Jordan 1 Retro MCS has a molded outsole for traction that digs in, while its durable upper delivers a supportive fit.</p>
        </div>
        <p class="text__background">Jordan</p>
      </div>
      <div class="flex__item flex__item--right"></div>
      <img class="pokemon__img" src="images/slide-img1.png" />
    </div>
    <div class="flex__container flex--piplup animate--start" data-slide="2">
      <div class="flex__item flex__item--left">
        <div class="flex__content">
          <p class="text--sub">Stainless Steel Bottle</p>
          <h1 class="text--big">Nike Recharge</h1>
          <p class="text--normal">From workouts to trails, this bottle's vacuum-insulated stainless steel keeps drinks cold. Twist-off cap for easy rehydration. Durable, leak-resistant, with comfortable carrying loop. </p>
        </div>
        <p class="text__background">Nike Recharge</p>
      </div>
      <div class="flex__item flex__item--right"></div>
      <img class="pokemon__img" src="images/bottle.png" />
    </div>
    <div class="flex__container flex--blaziken animate--start" data-slide="3">
      <div class="flex__item flex__item--left">
        <div class="flex__content">
          <p class="text--sub">Pokemon Gen III</p>
          <h1 class="text--big">Blaziken</h1>
          <p class="text--normal">Blaziken is the Fire/Fighting-type Starter Pokémon of the Hoenn region, introduced in Generation III. Blaziken is a large, bipedal, humanoid bird-like Pokémon that resembles a rooster.</p>
        </div>
        <p class="text__background">Blaziken</p>
      </div>
      <div class="flex__item flex__item--right"></div>
      <img class="pokemon__img" src="images/ball.png" />
    </div>
    <div class="flex__container flex--dialga animate--start" data-slide="4">
      <div class="flex__item flex__item--left">
        <div class="flex__content">
          <p class="text--sub">Pokemon Gen IV</p>
          <h1 class="text--big">Dialga</h1>
          <p class="text--normal">Dialga is a Steel/Dragon-type Legendary Pokémon. Dialga is a sauropod-like Pokémon. It is mainly blue with some gray, metallic portions, such as its chest plate, which has a diamond in the center. It also has various, light blue lines all over
            its body.</p>
        </div>
        <p class="text__background">Dialga</p>
      </div>
      <div class="flex__item flex__item--right"></div>
      <img class="pokemon__img" src="images/slider-shoe-1.png" />
    </div>
    <div class="flex__container flex--zekrom animate--start" data-slide="5">
      <div class="flex__item flex__item--left">
        <div class="flex__content">
          <p class="text--sub">Pokemon Gen V</p>
          <h1 class="text--big">Zekrom</h1>
          <p class="text--normal">Zekrom is a Dragon/Electric-type Legendary Pokémon. It is part of the Tao Trio, along with Reshiram and Kyurem. Zekrom is a large, black draconian Pokémon that seems to share its theme with its counterpart, Reshiram. It has piercing red eyes and
            dark gray to black skin that seems to be armor-like.</p>
        </div>
        <p class="text__background">Zekrom</p>
      </div>
      <div class="flex__item flex__item--right"></div>
      <img class="pokemon__img" src="images/slider-shoe-1.png" />
    </div>
  </div>
  
  <div class="slider__navi">
    <a href="#" class="slide-nav active" data-slide="1">pikachu</a>
    <a href="#" class="slide-nav" data-slide="2">piplup</a>
    <a href="#" class="slide-nav" data-slide="3">blaziken</a>
    <a href="#" class="slide-nav" data-slide="4">dialga</a>
    <a href="#" class="slide-nav" data-slide="5">zekrom</a>
  </div>






  <script>

$('.slide-nav').on('click', function(e) {
  e.preventDefault();
  // get current slide
  var current = $('.flex--active').data('slide'),
    // get button data-slide
    next = $(this).data('slide');

  $('.slide-nav').removeClass('active');
  $(this).addClass('active');

  if (current === next) {
    return false;
  } else {
    $('.slider__warpper').find('.flex__container[data-slide=' + next + ']').addClass('flex--preStart');
    $('.flex--active').addClass('animate--end');
    setTimeout(function() {
      $('.flex--preStart').removeClass('animate--start flex--preStart').addClass('flex--active');
      $('.animate--end').addClass('animate--start').removeClass('animate--end flex--active');
    }, 800);
  }
});
  </script>