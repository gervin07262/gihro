@extends('layouts/front')
@section('csss')
    {{ Html::style('assets-front/vendor/rs-plugin/css/settings.css') }}
    {{ Html::style('assets-front/vendor/rs-plugin/css/layers.css') }}
    {{ Html::style('assets-front/vendor/rs-plugin/css/navigation.css') }}
    {{ Html::style('assets-front/vendor/circle-flip-slideshow/css/component.css') }}
@endsection
@section('sidebarLeft')
  @include('panel.partials.sidebar-left-directors')
@endsection
@section('content')
  <div role="main" class="main">
      <div class="slider-container rev_slider_wrapper">
        <div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options='{"delay": 9000, "gridwidth": 1170, "gridheight": 500}'>
          <ul>
  					<li data-transition="fade">
              {{ HTML::image('assets-front/img/slides/slide-bg.jpg', '', ['data-bgfit' => 'cover',
                'data-bgposition' => 'left top', 'data-bgrepeat' => 'no-repeat']) }}
              <div class="tp-caption sft stb visible-lg" data-x="72" data-y="180" data-speed="300" data-start="1000" data-easing="easeOutExpo">
                {{ HTML::image('assets-front/img/slides/slide-title-border.png', '', []) }}
              </div>
              <div class="tp-caption top-label lfl stl" data-x="122" data-y="180" data-speed="300" data-start="500" data-easing="easeOutExpo">TE PREGUNTAS</div>
              <div class="tp-caption sft stb visible-lg" data-x="372" data-y="180" data-speed="300" data-start="1000" data-easing="easeOutExpo">
                {{ HTML::image('assets-front/img/slides/slide-title-border.png', '', []) }}
              </div>
              <div class="tp-caption main-label sft stb" style="font-size: 46px;" data-x="30" data-y="210" data-speed="300" data-start="1500" data-easing="easeOutExpo">QUE HACE TU HIJO?</div>
              <div class="tp-caption bottom-label sft stb" data-x="80" data-y="280" data-speed="500" data-start="2000" data-easing="easeOutExpo">Ahora estar&aacute;s bien informado.</div>
              <div class="tp-caption randomrotate" data-x="800" data-y="248" data-speed="500" data-start="2500" data-easing="easeOutBack">
                {{ HTML::image('assets-front/img/slides/people.png', '', []) }}
              </div>
              <div class="tp-caption sfb" data-x="850" data-y="200" data-speed="400" data-start="3000" data-easing="easeOutBack">
                {{ HTML::image('assets-front/img/slides/slide-concept-2-2.png', '', []) }}
              </div>
              <div class="tp-caption sfb" data-x="820" data-y="170" data-speed="700" data-start="3150" data-easing="easeOutBack">
                {{ HTML::image('assets-front/img/slides/slide-concept-2-3.png', '', []) }}
              </div>
              <div class="tp-caption sfb" data-x="770" data-y="130" data-speed="1000" data-start="3250" data-easing="easeOutBack">
                {{ HTML::image('assets-front/img/slides/slide-concept-2-4.png', '', []) }}
              </div>
              <div class="tp-caption sfb" data-x="500" data-y="80" data-speed="600" data-start="3450" data-easing="easeOutExpo">
                {{ HTML::image('assets-front/img/slides/cloud.png', '', []) }}
              </div>
              <div class="tp-caption blackboard-text lfb " style="font-size: 37px;" data-x="530" data-y="300" data-speed="500" data-start="3450" data-easing="easeOutExpo">&iquest;Siempre</div>
              <div class="tp-caption blackboard-text lfb " style="font-size: 47px;" data-x="555" data-y="350" data-speed="500" data-start="3650" data-easing="easeOutExpo">con el mismo</div>
              <div class="tp-caption blackboard-text lfb " style="font-size: 32px;" data-x="580" data-y="400" data-speed="500" data-start="3850" data-easing="easeOutExpo">interrogante?</div>
  					</li>
            <li data-transition="fade">
              {{ HTML::image('assets-front/img/slides/slide-bg.jpg', '', ['data-bgfit' => 'cover',
                'data-bgposition' => 'left top', 'data-bgrepeat' => 'no-repeat']) }}
              <div class="tp-caption fade" data-x="50" data-y="100" data-speed="1500" data-start="500" data-easing="easeOutExpo">
                {{ HTML::image('assets-front/img/slides/cloud2.png', '', []) }}
              </div>
              <div class="tp-caption blackboard-text fade " style="font-size: 30px;" data-x="180" data-y="180" data-speed="1500" data-start="1000" data-easing="easeOutExpo">La mejor</div>
              <div class="tp-caption blackboard-text fade " style="font-size: 40px;" data-x="180" data-y="220" data-speed="1500" data-start="1200" data-easing="easeOutExpo">herramienta</div>
              <div class="tp-caption main-label sft stb" style="font-size: 36px;" data-x="580" data-y="190" data-speed="300" data-start="1500" data-easing="easeOutExpo">DA UN GIHRO DE 360&deg;</div>
              <div class="tp-caption bottom-label sft stb" data-x="580" data-y="250" data-speed="500" data-start="2000" data-easing="easeOutExpo">a la comunicaci&oacute;n con tu centro infatil.</div>
            </li>
            <li data-transition="fade">
              {{ HTML::image('assets-front/img/slides/slide-3.jpg', '', ['data-bgfit' => 'cover',
                'data-bgposition' => 'left top', 'data-bgrepeat' => 'no-repeat']) }}
            </li>
          </ul>
        </div>
      </div>
      <div class="home-intro" id="home-intro">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <p>
                The fastest way to grow your business with the leader in <em>Technology</em>
                <span>Check out our options and features included.</span>
              </p>
            </div>
            <div class="col-md-4">
              <div class="get-started">
                <a href="#" class="btn btn-lg btn-primary">Get Started Now!</a>
                <div class="learn-more">or <a href="index.html">learn more.</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row center">
          <div class="col-md-12">
            <h1 class="mb-sm word-rotator-title">
              Da un
              <strong class="inverted">
                <span class="word-rotate" data-plugin-options='{"delay": 2000, "animDelay": 300}'>
                  <span class="word-rotate-items">
                    <span>Gihro</span>
                    <span>de</span>
                    <span>360°</span>
                  </span>
                </span>
              </strong>
              a tu centro infatil.
            </h1>
            <p class="lead">
              Llega la nueva herramienta que permitirá mantener una excelente comunicación entre el centro educativo y los padres de los niños.
            </p>
            <p class="lead">
              Olvídese de los problemas tan comunes que surgen al utilizar las agendas de papel: extravío de circulares, daño de las hojas, olvidos, etc.
            </p>
            <p class="lead">
              Se acabaron los problemas que surgen por una mala comunicación. En Gihro buscamos la máxima rapidez y eficacia a la hora de rellenar las agendas, notificar los cumpleaños, distribuir los menús alimentarios, informar de una excursión, etc. No es sólo una agenda digital; contiene más herramientas que complementarán el trabajo diario de los educadores.
            </p>
            <p class="lead">
              Creemos que la seguridad de los niños es lo más importante; por eso, solamente el educador y los padres del niño podrán acceder a su información personal.
            </p>
            <p class="lead">
              ¿Preparado para probar nuestro producto?
            </p>
          </div>
        </div>
      </div>
      <div class="home-concept">
        <div class="container">
          <div class="row center">
            <span class="sun"></span>
            <span class="cloud"></span>
            <div class="col-md-2 col-md-offset-1">
              <div class="process-image appear-animation" data-appear-animation="bounceIn">
                {{ HTML::image('assets-front/img/home-concept-item-1.png', '', []) }}
                <strong>Strategy</strong>
              </div>
            </div>
            <div class="col-md-2">
              <div class="process-image appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="200">
                {{ HTML::image('assets-front/img/home-concept-item-2.png', '', []) }}
                <strong>Planning</strong>
              </div>
            </div>
            <div class="col-md-2">
              <div class="process-image appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="400">
                {{ HTML::image('assets-front/img/home-concept-item-3.png', '', []) }}
                <strong>Build</strong>
              </div>
            </div>
            <div class="col-md-4 col-md-offset-1">
              <div class="project-image">
                <div id="fcSlideshow" class="fc-slideshow">
                  <ul class="fc-slides">
                    <li>
                      <a href="portfolio-single-small-slider.html">
                        {{ HTML::image('assets-front/img/projects/project-home-1.jpg', '', ['class' => 'img-responsive']) }}
                      </a>
                    </li>
                    <li>
                      <a href="portfolio-single-small-slider.html">
                        {{ HTML::image('assets-front/img/projects/project-home-2.jpg', '', ['class' => 'img-responsive']) }}
                      </a>
                    </li>
                    <li>
                      <a href="portfolio-single-small-slider.html">
                        {{ HTML::image('assets-front/img/projects/project-home-3.jpg', '', ['class' => 'img-responsive']) }}
                      </a>
                    </li>
                  </ul>
                </div>
                <strong class="our-work">Our Work</strong>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
@section('javascripts')
    {{ Html::script('assets-front/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}
    {{ Html::script('assets-front/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}
    {{ Html::script('assets-front/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js') }}
    {{ Html::script('assets-front/js/views/view.home.js') }}
@endsection
