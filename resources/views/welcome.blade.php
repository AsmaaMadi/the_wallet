@extends('layouts.master')

@section('content')

    <main id="main">
        <!-- Main body /////////////////////////////////////////////////////--><!--Breadcrumb--><!--Breadcrumb Ends -->
        <section  aria-label="Small Changes Mean Big Things">
            <div class="marquee marquee--banner" style="background-image: url({{ asset('/image/hellowallet.jpg') }});">
                <div class="marquee__content">
                    <h1 class="marquee__heading">Small Changes Mean Big Things</h1>				<div class="marquee__subheading">
                        <p>We've updated this page, now that Wallet is part of KeyBank, but our commitment to your financial wellness journey continues same as always. Come on in.</p>
                    </div>
                    <a href="{{route('login')}}" class="btn">Sign In</a>

                </div>
            </div>
        </section>
        <section  aria-label="New to HelloWallet?">
            <div class="block ">
                <div class="block__content">
                    <!-- Block Heading -->
                    <h2 class="block__heading">New to HelloWallet?</h2>
                    <!-- Block Subheading -->
                    <p class="block__subheading">Take the first step towards reaching your financial goals.</p>
                    <!-- Block Content/Rich Text -->
                    <div class="block__wysiwyg">
                        <ul>
                            <li>Get a full picture of your Financial Wellness and track improvements over time</li>
                            <li>Say goodbye to complicated budgeting and build a simple spending plan that works for you</li>
                            <li>Prepare for a bright future with forecasting tools and savings recommendations</li>
                            <li>Securely connect to your banks and see your balances and transactions, updated in real-time</li>
                        </ul>
                        <p>Take the first step to financial wellness.</p>			</div>
                </div>
                <a href="{!! url('/wallet') !!}" class="btn">Sign Up Today</a>
            </div>
        </section>


    </main>
@endsection
