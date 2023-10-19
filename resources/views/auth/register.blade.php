@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <section class="section theme-background bg-cover section-70  bg-default">
            <div class="shell">
                <div class="range range-65 range-xs-center">
                    <div class="cell-md-8 text-md-left">
                        <h3 class="text-bold">Register</h3>
                        <hr class="divider bg-madison hr-md-left-0">
                        <div class="offset-top-30 offset-md-top-30">
                            @if(session('success'))
                                <span class="text-success">{{session('success')}}</span>
                            @endif
                        </div>

                        <div class="offset-top-30">
                            <form method="post" action="{{ route('register') }}">
                                @csrf
                                <div class="range range-12">
                                    <div class="cell-sm-6">
                                        <div class="form-group">
                                            <label class="form-label form-label-outside" for="name">Name</label>
                                            <input id="name" style="font-size: 1.5rem" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" id="name" required autocomplete="name" autofocus>
                                        </div>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="cell-sm-6">
                                        <div class="form-group">
                                            <label class="form-label form-label-outside" for="email">Email</label>
                                            <input id="email" style="font-size: 1.5rem" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        </div>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="cell-sm-6">
                                        <div class="form-group" >
                                            <label class="form-label form-label-outside" for="registration-phone">Phone</label>
                                        </div>
                                        <div class="input-group  mt-2">
                                            <span class="input-group-text" style="font-size: 1.5rem" >+880</span>
                                            <input style="font-size: 1.5rem" type="text"  class="form-control form-validation-inside @error('phone') is-invalid @enderror" value="{{ old('phone') }}"  required id="registration-phone" type="number" name="phone" >
                                        </div>
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="cell-sm-6">
                                        <div class="form-group">
                                            <label class="form-label form-label-outside" for="batch">Your Batch/Session</label>
                                            <select style="font-size: 1.5rem" class="form-control form-validation-inside @error('batch') is-invalid @enderror" value="{{ old('batch') }}"  required id="batch" type="text" name="batch"  aria-label="Default select example">
                                                <option selected>Select Your Batch</option>
                                                @foreach($batch as $batches)
                                                <option value="{{$batches->id}}">{{$batches->batch_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('batch')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="cell-sm-6">
                                        <div class="form-group">
                                            <label class="form-label form-label-outside" for="facebooklink">Facebook Link</label>
                                            <input style="font-size: 1.5rem" class="form-control form-validation-inside @error('facebooklink') is-invalid @enderror" value="{{ old('facebooklink') }}" id="facebooklink" type="text" name="facebooklink" >
                                        </div>
                                        @error('facebooklink')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                    <div class="cell-sm-6">
                                        <div class="form-group">
                                            <label class="form-label form-label-outside" for="linkdinlink">Linkdin Link</label>
                                            <input style="font-size: 1.5rem" class="form-control form-validation-inside @error('linkdinlink') is-invalid @enderror" value="{{ old('linkdinlink') }}" id="linkdinlink" type="text" name="linkdinlink" >
                                        </div>
                                        @error('linkdinlink')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                    <div class="cell-sm-6">
                                        <div class="form-group">
                                            <label class="form-label form-label-outside" for="password">password</label>
                                            <input style="font-size: 1.5rem" id="password" type="password" class="form-control @error('password') is-invalid @enderror"   name="password" required autocomplete="new-password">
                                        </div>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="cell-sm-6">
                                        <div class="form-group">
                                            <label class="form-label form-label-outside" for="password-confirm">Confirm Password</label>
                                            <input style="font-size: 1.5rem" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>

                                    </div>


                                    <div class="cell-xs-12">
                                        <div class="form-group">
                                            <label class="form-label form-label-outside" for="registration-bio">BIO</label>
                                            <textarea style="font-size: 1.5rem" class="form-control form-validation-inside  @error('bio') is-invalid @enderror" value="{{ old('bio') }}" required  id="registration-bio" name="bio" style="height: 160px"></textarea>
                                        </div>
                                        @error('bio')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                    <div class="cell-sm-6">
                                        <div class="form-group">
                                            <label class="form-label form-label-outside" for="jobName">Job Name</label>
                                            <input style="font-size: 1.5rem" class="form-control form-validation-inside @error('jobname') is-invalid @enderror" value="{{ old('jobname') }}" id="jobName" type="text" name="jobname" >
                                        </div>
                                        @error('jobname')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="cell-sm-6">
                                        <div class="form-group">
                                            <label class="form-label form-label-outside" for="address">Your Address</label>
                                            <input style="font-size: 1.5rem" class="form-control form-validation-inside @error('address') is-invalid @enderror" value="{{ old('jobposition') }}" id="address" type="text" name="address" >
                                        </div>
                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="cell-xs-12 mt-5">

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sex" id="flexRadioDefault1" value="male" checked>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Male
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sex" id="flexRadioDefault2" value="female" >
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Female
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <div class="text-center text-md-left offset-top-20">
                                    <button class="btn btn-primary" type="submit" >Profile Update</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
</div>
@endsection
