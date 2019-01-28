---
title: Kontakt
body_classes: 'title-center title-h1h2'
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
form:
    name: kontakt
    action: /kontakt
    fields:
        -
            name: anrede
            id: anrede
            label: Anrede
            type: radio
            options:
                Frau: Frau
                Herr: Herr
            validate:
                required: true
        -
            name: companytype
            id: companytype
            label: 'Company Type'
            type: select
            options:
                typea: 'Type A'
                typeb: 'Type A'
            validate:
                required: true
        -
            name: name
            label: 'Vor- und Nachname'
            type: text
            validate:
                required: true
        -
            name: email
            label: E-Mail
            type: email
            validate:
                required: true
        -
            name: firmenname
            label: Firmenname
            type: text
        -
            name: telefon
            label: Telefon
            type: text
        -
            name: betreff
            label: Betreff
            type: text
            validate:
                required: true
        -
            name: nachricht
            label: Nachricht
            type: textarea
            validate:
                required: true
        -
            name: ja_ich_stimme_zu
            label: 'Ja, ich stimme den Datenschutzbedingungen zu.'
            type: checkbox
            validate:
                required: true
        -
            name: g-recaptcha-response
            label: Captcha
            type: captcha
            recaptcha_site_key: 6Le5vnUUAAAAAHzAy9rfm_wy63bXttVCLFOtD0Lu
            recaptcha_not_validated: 'Captcha not valid!'
            validate:
                required: true
    buttons:
        -
            type: submit
            value: Senden
        -
            type: reset
            value: Reset
    process:
        -
            captcha:
                recaptcha_secret: 6Le5vnUUAAAAAP8327Gr_QA_2E2I0ESjdaWbaWj0
        -
            email:
                to: arash@saffari.com
                from: '{{ form.value.email|e }}'
                subject: '[Kontakt] {{ form.value.betreff|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            display: danke
---

{% set page1 = page.find('/components/breadcrumbs') %} {{ page1.content }}

{% do assets.addJs('https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAvu2gZ87OKu7wM9vW9_DP3b0usUKB7zTs', {'priority':120, 'pipeline':false, 'loading':''}) %}
{assets:inline_js}
	function init_map(){
		var mystyles = [
			{
				"elementType": "geometry",
				"stylers": [
				{
					"color": "#f5f5f5"
				}
				]
			},
			{
				"elementType": "labels.icon",
				"stylers": [
				{
					"visibility": "off"
				}
				]
			},
			{
				"elementType": "labels.text.fill",
				"stylers": [
				{
					"color": "#616161"
				}
				]
			},
			{
				"elementType": "labels.text.stroke",
				"stylers": [
				{
					"color": "#f5f5f5"
				}
				]
			},
			{
				"featureType": "administrative.land_parcel",
				"elementType": "labels.text.fill",
				"stylers": [
				{
					"color": "#bdbdbd"
				}
				]
			},
			{
				"featureType": "poi",
				"elementType": "geometry",
				"stylers": [
				{
					"color": "#eeeeee"
				}
				]
			},
			{
				"featureType": "poi",
				"elementType": "labels.text.fill",
				"stylers": [
				{
					"color": "#757575"
				}
				]
			},
			{
				"featureType": "poi.park",
				"elementType": "geometry",
				"stylers": [
				{
					"color": "#e5e5e5"
				}
				]
			},
			{
				"featureType": "poi.park",
				"elementType": "labels.text.fill",
				"stylers": [
				{
					"color": "#9e9e9e"
				}
				]
			},
			{
				"featureType": "road",
				"elementType": "geometry",
				"stylers": [
				{
					"color": "#ffffff"
				}
				]
			},
			{
				"featureType": "road.arterial",
				"elementType": "labels.text.fill",
				"stylers": [
				{
					"color": "#757575"
				}
				]
			},
			{
				"featureType": "road.highway",
				"elementType": "geometry",
				"stylers": [
				{
					"color": "#dadada"
				}
				]
			},
			{
				"featureType": "road.highway",
				"elementType": "labels.text.fill",
				"stylers": [
				{
					"color": "#616161"
				}
				]
			},
			{
				"featureType": "road.local",
				"elementType": "labels.text.fill",
				"stylers": [
				{
					"color": "#9e9e9e"
				}
				]
			},
			{
				"featureType": "transit.line",
				"elementType": "geometry",
				"stylers": [
				{
					"color": "#e5e5e5"
				}
				]
			},
			{
				"featureType": "transit.station",
				"elementType": "geometry",
				"stylers": [
				{
					"color": "#eeeeee"
				}
				]
			},
			{
				"featureType": "water",
				"elementType": "geometry",
				"stylers": [
				{
					"color": "#c9c9c9"
				}
				]
			},
			{
				"featureType": "water",
				"elementType": "labels.text.fill",
				"stylers": [
				{
					"color": "#9e9e9e"
				}
				]
			}
		];

		var myOptions = {
			zoom:16,
			center:new google.maps.LatLng(50.941837, 6.950858),
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			styles: mystyles,
			zoomControl: false,
			mapTypeControl: false,
			scaleControl: false,
			streetViewControl: true,
			rotateControl: false,
			fullscreenControl: false
		};
		map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
		marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(50.941837, 6.950858)});

		infowindow = new google.maps.InfoWindow({
			content:'<strong>Akademie am Rhein (AAR) GmbH</strong><br>Kattenbug 2, 50667 Köln<br>'
		});
		google.maps.event.addListener(marker, 'click', function(){
			infowindow.open(map,marker);
		});
		infowindow.open(map,marker);

		
	}
	google.maps.event.addDomListener(window, 'load', init_map);
{/assets}

{assets:inline_css}
#gmap_canvas{height:600px;}
@media only screen and (min-width: 0px) and (max-width: 479px){
}

/*iPhone landscape mode*/
@media only screen and (min-width: 480px) and (max-width: 767px) {
}

/*iPad portrait mode*/
@media only screen and (min-width: 768px) and (max-width: 991px) {
}

/*iPad landscape mode*/
@media only screen and (min-width: 992px) and (max-width: 1199px) {
}

@media only screen and (min-width: 1200px) and (max-width: 1280px) {
}
{/assets}

<div class="boxshadow-3" style='overflow:hidden;'>
	<div id='gmap_canvas'></div>
</div>

<div class="container my-100">	
	<div class="row">
		<div class="col-lg-12">
			<h1>Kontakt</h1>
			<hr />
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
            <!--%form_massage%-->
			<form name="kontakt" action="" method="POST" id="kontakt">
				<fieldset>
                    <div class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-3 pt-0">Anrede: <span class="required">*</span></legend>
                            <div class="col-sm-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="data[anrede]" id="anrede_female" value="Frau" {% if uri.query('anrede') == 'Frau' %}checked{% endif %} required="required">
                                    <label class="form-check-label" for="anrede_female">Frau</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="data[anrede]" id="anrede_male" value="Herr" {% if uri.query('anrede') == 'Herr' %}checked{% endif %}>
                                    <label class="form-check-label" for="anrede_male">Herr</label>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
						<label for="firmenname">Firmenname:</label>
                        <input name="data[firmenname]" type="text" value="{{ form.value('firmenname')|e('html_attr') }}" class="form-control" id="firmenname">
					</div>
                    <div class="form-group">
                        <label for="companytype">Company Type: <span class="required">*</span></label>
                        <select name="data[companytype]" class="form-control" id="companytype" required="required">
                            <option value=""></option>
                            <option value="typea" {% if uri.query('companytype') == 'f' %}selected{% endif %}>Type A</option>
                            <option value="typeb" {% if uri.query('companytype') == 'm' %}selected{% endif %}>Type B</option>
                        </select>
                    </div>
					<div class="form-group">
						<label for="name">Vor- und Nachname: <span class="required">*</span></label>
                        <input name="data[name]" type="text" value="{{ form.value('name')|join(', ')|e('html_attr') }}" class="form-control" id="name" required="required">
					</div>
                    <div class="form-group">
						<label for="email">E-Mail: <span class="required">*</span></label>
                        <input name="data[email]" type="email" value="{{ form.value('email')|join(', ')|e('html_attr') }}" class="form-control" id="email" aria-describedby="emailHelp" required="required">
					</div>
                    <div class="form-group">
                        <label for="telefon">Telefon:</label>
                        <input name="data[telefon]" type="tel" value="{{ form.value('telefon')|join(', ')|e('html_attr') }}" class="form-control" id="telefon">
                    </div>
                    <div class="form-group">
                        <label for="betreff">Betreff: <span class="required">*</span></label>
                        <input name="data[betreff]" type="text" value="{{ form.value('betreff')|join(', ')|e('html_attr') }}" class="form-control" id="betreff" required="required">
                    </div>
                    <div class="form-group">
                        <label for="nachricht">Nachricht: <span class="required">*</span></label>
                        <textarea  name="data[nachricht]" class="form-control" id="nachricht" rows="8" required="required">{{ form.value('nachricht')|trim|e('html') }}</textarea>
                    </div>
                    <div class="col-lg-12">
                        <div class="checkbox" style="margin-top:20px;">
                            <table>
                                <tr>
                                    <td valign="top"><input type="checkbox" name="data[ja_ich_stimme_zu]" id="ja_ich_stimme_zu" required="required"></td>
                                    <td><label for="ja_ich_stimme_zu" class="ml-5">Mit dieser Anmeldung akzeptieren Sie die <a href="{{ url('agbs') }}" target="_blank" class="">AGB</a> der {FIRMENNAME} und bestätigen die Kenntnisnahme der Widerrufsbelehrung und unsere <a href="{{ url('datenschutz') }}" target="_blank" class="">Datenschutzbestimmungen</a>.</label></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="form-group mt-30">
                        <div style="width: 304px;" class="mx-auto">
                            <label for="captcha">Captcha: <span class="required">*</span></label>
                            <div class="form-data" data-grav-field="captcha" data-grav-disabled="true" data-grav-default="null">
                                <script>
                                    var captchaOnloadCallback = function captchaOnloadCallback() {
                                        grecaptcha.render('g-recaptcha', {
                                            'sitekey': "6Le5vnUUAAAAAHzAy9rfm_wy63bXttVCLFOtD0Lu",
                                            'callback': captchaValidatedCallback,
                                            'expired-callback': captchaExpiredCallback
                                        });
                                    };
                                    var captchaValidatedCallback = function captchaValidatedCallback() {};
                                    var captchaExpiredCallback = function captchaExpiredCallback() { grecaptcha.reset(); };
                                </script>
                                <script src="https://www.google.com/recaptcha/api.js?onload=captchaOnloadCallback&render=explicit&hl=de" async defer></script>
                                <div class="g-recaptcha mx-auto" id="g-recaptcha"></div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="__form-name__" value="kontakt" />
                    {{ nonce_field('form', 'form-nonce') }}
                    <div class="text-center">
                        <button class="btn btn-primary" type="submit">Senden</button>
                    </div>
				</fieldset>
			</form>
		</div>
	</div>
</div>
