 {{-- Add a new Student --}}
 @extends('layouts.main')
 @section('content')
 
 <div class="container">

{{-- display any errors --}}
 @if($errors->any())
 @foreach ($errors->all() as $error)

<div class="alert alert-danger" role="alert">
  {{ $error }}
</div>

@endforeach

 @endif


<h1> Create page </h1> 

<!-- Default form register -->
<form class="text-center border border-light p-5" action="{{ route('store') }}" method="POST">

  {{-- to prevent cross site script attacks --}}
  @csrf

    <p class="h4 mb-4">Add Student </p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" 
            class="form-control" name="firstname" value = "{{ old('firstname' )}}"
            placeholder="First name">
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" 
            class="form-control" name="lastname" value = "{{ old('lastname' )}}"
            placeholder="Last name">
        </div>
    </div>

    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" 
    class="form-control mb-4" name="email" value = "{{ old('email' )}}"
    placeholder="E-mail">

    <!-- Phone number -->
    <input type="text" id="defaultRegisterPhone" 
    class="form-control" name="phone" value = "{{ old('phone' )}}"
    placeholder="Phone Number">

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Add Data</button>

</form>
<!-- Default form register -->

 </div>
 @endsection
