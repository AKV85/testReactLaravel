@component('mail::message')
    @slot('subject', 'News from Andrej Kotov')
    # Welcome to our newsletter

    Thank you for subscribing to our monthly newsletter. Your email address ({{ $subscriber->email }}) has been added to our mailing list.

    We'll be in touch soon with the latest news and updates.

    Pagarbiai / Best Regards / с Уважением,

    Andrej Kotov
@endcomponent
