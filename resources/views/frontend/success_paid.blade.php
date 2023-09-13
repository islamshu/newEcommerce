@extends('frontend.layouts.app')
@section('content')
<div class="row">
    <div class="col-md-4">

    </div>
    <div class="rounded-4 shadow col-md-4 col-10 ms-auto me-auto px-4 py-3 my-md-5 my-3 border">
        <div class="text-center my-3">
            <img src="https://cdn-icons-png.flaticon.com/512/5610/5610944.png" width="100" height="100" alt="">
        </div>
        <div class="text-center my-5">
            <h2 class="text-secondary">
                تمت العملية بنجاح
            </h2>
        </div>
        <div class="text-center mt-5 mb-2">
            <p class="fs-6 text-secondary">
                يرجى تسديد المبلغ المطلوب على الحساب البنكي الخاص بنا
            </p><p class="text-primary">.</p>
            <p class="text-danger">
                وارسال رسالة الخصم والتفاصيل المالية الى خدمة العملاء
            </p>
            <p></p>
        </div>
        <div class="text-center mt-2 mb-4">
            <p class="fs-6 text-secondary">شكرا لك ولثقتك. وإنه لمن دواعي سرورنا العمل معكم.
                نشكرك على كونك من عملائنا الكرام. نحن ممتنون للغاية لخدمتك ونأمل أن نكون قد حققنا توقعاتك.
            </p>
        </div>
        <div class="text-center my-4">
            <p class="fs-6 text-secondary">
                سيتم التواصل معك في أقرب وقت ابقى بالقرب
                <i class="fas fa-heart fa-fw"></i>
            </p>
        </div>
        <div class="text-center my-3">
            <a href="{{ route('supportpolicy') }}" class="btn btn-outline-success w-100">
                <i class="fas fa-headset fa-fw"></i>
                خدمة العملاء
            </a>
        </div>
    </div>
    <div class="col-md-4">

    </div>
</div>
@endsection