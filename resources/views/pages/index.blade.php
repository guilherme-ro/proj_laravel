@extends('layouts.app')

@section('content')
	<header id="home-section">
			<div class="dark-overlay">
				<div class="home-inner container">
					<div class="row">
						<div class="col-lg-8 d-none d-lg-block">
							<h1>Lorem ipsum</h1>
							<div class="d-flex">
								<div class="p-4 align-self-start">
									<i class="fas fa-check fa-2x"></i>
								</div>
								<div class="p-4 align-self-end">
									Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, tempore iusto in minima facere dolorem!
								</div>
							</div>
							<div class="d-flex">
								<div class="p-4 align-self-start">
									<i class="fas fa-check fa-2x"></i>
								</div>
								<div class="p-4 align-self-end">
									Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, tempore iusto in minima facere dolorem!
								</div>
							</div>
							<div class="d-flex">
								<div class="p-4 align-self-start">
									<i class="fas fa-check fa-2x"></i>
								</div>
								<div class="p-4 align-self-end">
									Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, tempore iusto in minima facere dolorem!
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							@guest
							<div class="card bg-primary text-center card-form">
								<div class="card-body">
									<h1>Bem Vindo</h1>
									<p>Cadastro de Pessoas e Endereços</p>
									<a class="btn btn-outline-light btn-block" href="/login" role="button">Login</a> 
									<a class="btn btn-outline-light btn-block" href="/register" role="button">Cadastrar</a>
								</div>
							</div>
          					@else
							<div class="card bg-primary text-center card-form">
								<div class="card-body">
									<h1>Bem Vindo</h1>
									<p>Cadastro de Pessoas e Endereços</p>
									<a class="btn btn-outline-light btn-block" href="{{ route('logout') }}"
                         				onclick="event.preventDefault();
                                       				document.getElementById('logout-form').submit();">
                          				{{ __('Sair') }}
              						</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form> 
								</div>
							</div>
         					@endguest

						</div>
					</div>
				</div>
			</div>
		</header>

		
		<section id="explore-head-section" class="bg-dark">
		  <div class="container">
		    <div class="row">
		      <div class="col text-center py-5">
		        <h1 class="display-4">Explore</h1>
		        <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente doloribus ut iure itaque quibusdam rem accusantium
		          deserunt reprehenderit sunt minus.</p>
		        <a href="#home-section" class="btn btn-outline-light">Veja Mais</a>
		      </div>
		    </div>
		  </div>
		</section>

		
		<section id="explore-section" class="bg-light text-muted py-5">
		  <div class="container">
		    <div class="row">
		      <div class="col-md-6">
		        <img src="{{ asset('img/explore-section1.jpg') }}" alt="" class="img-fluid mb-3 rounded-circle">
		      </div>
		      <div class="col-md-6">
		        <h3>Explore & Conecte</h3>
		        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore reiciendis, voluptate at alias laborum odit aliquid
		          tempore perspiciatis repudiandae hic?</p>
		        <div class="d-flex">
		          <div class="p-4 align-self-start">
		            <i class="fas fa-check fa-2x"></i>
		          </div>
		          <div class="p-4 align-self-end">
		            Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi distinctio iusto, perspiciatis mollitia natus harum?
		          </div>
		        </div>

		        <div class="d-flex">
		          <div class="p-4 align-self-start">
		            <i class="fas fa-check fa-2x"></i>
		          </div>
		          <div class="p-4 align-self-end">
		            Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi distinctio iusto, perspiciatis mollitia natus harum?
		          </div>
		        </div>
		      </div>
		    </div>
		  </div>
		</section>

		
		<section id="create-head-section" class="bg-primary">
		  <div class="container">
		    <div class="row">
		      <div class="col text-center py-5">
		        <h1 class="display-4">Crie</h1>
		        <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente doloribus ut iure itaque quibusdam rem accusantium
		          deserunt reprehenderit sunt minus.</p>
		        <a href="#home-section" class="btn btn-outline-light">Veja Mais</a>
		      </div>
		    </div>
		  </div>
		</section>

		
		<section id="create-section" class="py-5">
		  <div class="container">
		    <div class="row">
		      <div class="col-md-6 order-2">
		        <img src="{{ asset('img/create-section1.jpg') }}" alt="" class="img-fluid mb-3 rounded-circle">
		      </div>
		      <div class="col-md-6 order-1">
		        <h3>Crie Seu Site</h3>
		        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore reiciendis, voluptate at alias laborum odit aliquid
		          tempore perspiciatis repudiandae hic?</p>
		        <div class="d-flex">
		          <div class="p-4 align-self-start">
		            <i class="fas fa-check fa-2x"></i>
		          </div>
		          <div class="p-4 align-self-end">
		            Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi distinctio iusto, perspiciatis mollitia natus harum?
		          </div>
		        </div>

		        <div class="d-flex">
		          <div class="p-4 align-self-start">
		            <i class="fas fa-check fa-2x"></i>
		          </div>
		          <div class="p-4 align-self-end">
		            Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi distinctio iusto, perspiciatis mollitia natus harum?
		          </div>
		        </div>
		      </div>
		    </div>
		  </div>
		</section>
@endsection