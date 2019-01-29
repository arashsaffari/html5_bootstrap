---
title: 'Buttons & Icons'
twittercardoptions: summary
articleenabled: false
musiceventenabled: false
orgaenabled: false
orga:
    ratingValue: 2.5
orgaratingenabled: false
eventenabled: false
personenabled: false
restaurantenabled: false
restaurant:
    acceptsReservations: 'yes'
    priceRange: $
---

<div class="container my-100">	
	<div class="row">
		<div class="col-lg-12">
			<h1>Buttons & Icons</h1>
			<hr class="mb-0" />
			{% set page1 = page.find('/components/breadcrumbs') %} {{ page1.content }}
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 mb-60">
			<h3>Font Awesome</h3>
			<button class="btn"><i class="fab fa-500px"></i></button>
			<button class="btn"><i class="fab fa-accessible-icon"></i></button>
			<button class="btn"><i class="fab fa-angrycreative"></i></button>
			<button class="btn"><i class="fas fa-archive"></i></button>
			<button class="btn"><i class="fas fa-arrow-alt-circle-left"></i></button>
			<button class="btn"><i class="fas fa-angle-double-left"></i></button>
			<button class="btn"><i class="fas fa-angle-double-down"></i></button>
			<button class="btn"><i class="fab fa-amilia"></i></button>
			<button class="btn"><i class="fab fa-asymmetrik"></i></button>
			<button class="btn"><i class="fas fa-audio-description"></i></button>
			<button class="btn"><i class="fab fa-avianex"></i></button>
			<button class="btn"><i class="fas fa-balance-scale"></i></button>
			<button class="btn"><i class="fas fa-barcode"></i></button>
			<button class="btn"><i class="fas fa-band-aid"></i></button>
			<button class="btn"><i class="fas fa-basketball-ball"></i></button>
			<button class="btn"><i class="fab fa-accusoft"></i></button>
			<button class="btn"><i class="fas fa-address-book"></i></button>
			<button class="btn"><i class="far fa-address-book"></i></button>
			<button class="btn"><i class="fas fa-address-card"></i></button>
			<button class="btn"><i class="fab fa-adn"></i></button>
			<button class="btn"><i class="fab fa-algolia"></i></button>
			<button class="btn"><i class="fas fa-align-center"></i></button>
			<button class="btn"><i class="fas fa-align-justify"></i></button>
			<button class="btn"><i class="fas fa-american-sign-language-interpreting"></i></button>
			<button class="btn"><i class="fas fa-ambulance"></i></button>
			<button class="btn"><i class="fab fa-amilia"></i></button>
			<button class="btn"><i class="fas fa-battery-three-quarters"></i></button>
			<button class="btn"><i class="fas fa-beer"></i></button>
			<button class="btn"><i class="fab fa-behance-square"></i></button>
			<button class="btn"><i class="fas fa-bell"></i></button>
			<button class="btn"><i class="fas fa-bell-slash"></i></button>
			<button class="btn"><i class="fab fa-bitcoin"></i></button>
		</div>
		<div class="col-lg-12">
			<h1 id="buttons">Buttons</h1>
		</div>
		<div class="col-lg-12">
			<p>
				<a href="#" class="btn bgcolor-3 color-2 btn-circle"><i class="fas fa-basketball-ball"></i></a>
				<a href="#" class="btn bgcolor-3 color-2 btn-circle btn-lg"><i class="fas fa-basketball-ball"></i></a>
				<a href="#" class="btn bgcolor-3 color-2 btn-circle btn-sm"><i class="fas fa-basketball-ball"></i></a>
			</p>
			<p>
				<button type="button" class="btn btn-primary">Primary</button>
				<button type="button" class="btn btn-secondary">Secondary</button>
				<button type="button" class="btn btn-success">Success</button>
				<button type="button" class="btn btn-danger">Danger</button>
				<button type="button" class="btn btn-warning">Warning</button>
				<button type="button" class="btn btn-info">Info</button>
				<button type="button" class="btn btn-light">Light</button>
				<button type="button" class="btn btn-dark">Dark</button>
				<button type="button" class="btn btn-link">Link</button>
			</p>
			<p>
				<button type="button" class="btn btn-primary disabled">Primary</button>
				<button type="button" class="btn btn-secondary disabled">Secondary</button>
				<button type="button" class="btn btn-success disabled">Success</button>
				<button type="button" class="btn btn-danger disabled">Danger</button>
				<button type="button" class="btn btn-warning disabled">Warning</button>
				<button type="button" class="btn btn-info disabled">Info</button>
				<button type="button" class="btn btn-light disabled">Light</button>
				<button type="button" class="btn btn-dark disabled">Dark</button>
				<button type="button" class="btn btn-link disabled">Link</button>
			</p>
			<p>
				<button type="button" class="btn btn-outline-primary">Primary</button>
				<button type="button" class="btn btn-outline-secondary">Secondary</button>
				<button type="button" class="btn btn-outline-success">Success</button>
				<button type="button" class="btn btn-outline-danger">Danger</button>
				<button type="button" class="btn btn-outline-warning">Warning</button>
				<button type="button" class="btn btn-outline-info">Info</button>
				<button type="button" class="btn btn-outline-light">Light</button>
				<button type="button" class="btn btn-outline-dark">Dark</button>
			</p>
			<hr />
			<div class="btn-group" role="group" aria-label="Basic example">
				<button type="button" class="btn btn-secondary">Left</button>
				<button type="button" class="btn btn-secondary">Middle</button>
				<button type="button" class="btn btn-secondary">Right</button>
			</div>
			<hr />
			<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
				<div class="btn-group mr-2" role="group" aria-label="First group">
					<button type="button" class="btn btn-secondary">1</button>
					<button type="button" class="btn btn-secondary">2</button>
					<button type="button" class="btn btn-secondary">3</button>
					<button type="button" class="btn btn-secondary">4</button>
				</div>
				<div class="btn-group mr-2" role="group" aria-label="Second group">
					<button type="button" class="btn btn-secondary">5</button>
					<button type="button" class="btn btn-secondary">6</button>
					<button type="button" class="btn btn-secondary">7</button>
				</div>
				<div class="btn-group" role="group" aria-label="Third group">
					<button type="button" class="btn btn-secondary">8</button>
				</div>
			</div>
			<hr />
			<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
				<button type="button" class="btn btn-secondary">1</button>
				<button type="button" class="btn btn-secondary">2</button>
				<div class="btn-group" role="group">
					<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Dropdown
					</button>
					<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
					<a class="dropdown-item" href="#">Dropdown link</a>
					<a class="dropdown-item" href="#">Dropdown link</a>
					</div>
				</div>
			</div>
			<hr />
			<div class="btn-group" data-toggle="buttons">
				<label class="btn btn-secondary active">
					<input type="checkbox" checked autocomplete="off"> Checkbox 1 (pre-checked)
				</label>
				<label class="btn btn-secondary">
					<input type="checkbox" autocomplete="off"> Checkbox 2
				</label>
				<label class="btn btn-secondary">
					<input type="checkbox" autocomplete="off"> Checkbox 3
				</label>
			</div>
		</div>
	</div>
</div>
