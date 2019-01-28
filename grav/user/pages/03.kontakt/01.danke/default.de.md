---
title: Danke
visible: false
twittercardoptions: summary
articleenabled: false
musiceventenabled: false
orgaenabled: true
orga:
    name: 'Akademie am Rhein (AAR) GmbH'
    description: 'Ihr Partner in der Erwachsenbildung, Fortbildungen im Bereich der Bewachungsbranche, Sicherheitsbranche, Betreuungspflege sowie Altenpflege, gefördert z.B. durch die Jobcenter (AVGS).'
    legalname: 'Akademie am Rhein (AAR) GmbH'
    streetaddress: 'Kattenbug 2'
    city: Köln
    state: Nordrhein-Westfalen
    zipcode: '50667'
    logo: 'https://akademieamrhein.de/favicon.png'
    ratingValue: 4.7
    reviewCount: 1264
orgaratingenabled: true
eventenabled: false
personenabled: false
restaurantenabled: false
restaurant:
    acceptsReservations: 'yes'
    priceRange: $
form:
    name: anmeldung
    fields:
        -
            name: massnahme
            label: Maßnahme
            type: text
            validate:
                required: true
        -
            name: anfangen
            label: Anfangen
            type: text
            validate:
                required: true
        -
            name: firmenname
            label: Firmenname
            type: text
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
            name: telefon
            label: Telefon
            type: text
        -
            name: bemerkung
            label: Bemerkung
            type: textarea
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
                to: info@akademieamrhein.de
                from: '{{ form.value.email|e }}'
                subject: '[Site Contact Form] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            display: danke
---

{% set page1 = page.find('/components/breadcrumbs') %} {{ page1.content }}

<div class="container mb-50">
    <div class="row justify-content-between">
        <div class="col-md-7 mb-60">
            <div class="mt-30">
                <h1 class="h4 font_w6 color_4 py-20 mb-40 bordercolor_12">vielen dank,</h1>
                <p>dass Sie Ihre Frage an uns gesendet haben. Anfragen werden so schnell wie möglich beantwortet, in der wir sie empfangen haben. Wir kontaktieren Sie innerhalb der nächsten 24 Stunden.</p>
                <p>WICHTIG: Es kann sein, dass unsere Antwort von Ihrem SPAM-Filter entfernt wird. Wenn Sie die E-Mail nicht finden, sehen Sie in Ihrem Postfach für unerwünschte Werbung nach. Falls die E-Mail dort abgelegt wurde, markieren Sie diese als "Keine Werbung" und geben Sie den Absender (@akademieamrhein.de) in Ihr Adressbuch ein.</p>
                <p class="text-center"><a href="{{ url('home') }}" class="btn bgcolor_4 color_2">zurück zur Home</a></p>
            </div>
        </div>
        <div class="col-md-4">
            {% set page2 = page.find('/components/sidebar_right') %} {{ page2.content }}
        </div>
    </div>
</div>