@foreach($faqs as $faq)    @component('components.FAQ')        @slot('id') {{ $faq->id }} @endslot        @slot('question') {{ $faq->question }} @endslot        @slot('answer') {{ strip_tags($faq->answer) }} @endslot        @slot('created_at') {{ $faq->create_date }} @endslot        @slot('created_by') {{ $faq->user->full_name }} @endslot    @endcomponent    @if(!$loop->last)        <hr  class="FAQ_hr">    @endif@endforeach<script src="{{ asset('js/dashboard/faqAll.js') }}"></script>