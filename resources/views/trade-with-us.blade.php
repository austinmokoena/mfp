@extends('layouts.user_type.auth')

@section('content')

<div style="position: relative; min-height: 100vh; display: flex; justify-content: center; align-items: center; margin-top: 10px; overflow: hidden;">
    <!-- Background Images -->
    <img src="../assets/img/mccroc logo.png" alt="Background Image 1" style="position: absolute; top: 20%; left: 10%; width: 200px; height: 200px; border-radius: 50%; object-fit: cover; z-index: 1;">
    <img src="../assets/img/mccroc logo.png" alt="Background Image 2" style="position: absolute; bottom: 20%; right: 10%; width: 200px; height: 1200x; border-radius: 50%; object-fit: cover; z-index: 1;">
    <img src="../assets/img/mccroc logo.png" alt="Background Image 3" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 200px; height: 200px; border-radius: 50%; object-fit: cover; z-index: 1;">
    <img src="../assets/img/vaultm.png" alt="Background Image 4" style="position: absolute; top: 35%; left: 80%; transform: translate(-50%, -50%); width: 150px; height: 150px; border-radius: 50%; object-fit: cover; z-index: 1;">
    <img src="../assets/img/vaultm.png" alt="Background Image 4" style="position: absolute; bottom: 12%; left: 18%; transform: translate(-50%, -50%); width: 150px; height: 150px; border-radius: 50%; object-fit: cover; z-index: 1;">

    <!-- Glass Effect Form -->
    <form action="{{ route('create-lead') }}" method="POST" style="position: relative; background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-radius: 20px; padding: 24px; width: 100%; max-width: 400px; box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1); border: 1px solid rgba(255, 255, 255, 0.2); z-index: 2;">
        @csrf
        <h2 style="font-size: 22px; font-weight: 600; color: #4a4a4a; margin-bottom: 20px; text-align: center;">Open a trading account with our broker</h2>
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="fname" style="display: block; font-weight: 600; color: #555; margin-bottom: 8px;">First Name</label>
            <input type="text" id="fname" name="fname" required style="width: 100%; padding: 10px; border: 1px solid rgba(0, 0, 0, 0.3); border-radius: 8px; font-size: 14px; color: #333; outline: none; transition: border-color 0.3s; background: rgba(255, 255, 255, 0.1);">
        </div>
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="lname" style="display: block; font-weight: 600; color: #555; margin-bottom: 8px;">Last Name</label>
            <input type="text" id="lname" name="lname" required style="width: 100%; padding: 10px; border: 1px solid rgba(0, 0, 0, 0.3); border-radius: 8px; font-size: 14px; color: #333; outline: none; transition: border-color 0.3s; background: rgba(255, 255, 255, 0.1);">
        </div>
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="email" style="display: block; font-weight: 600; color: #555; margin-bottom: 8px;">Email</label>
            <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; border: 1px solid rgba(0, 0, 0, 0.3); border-radius: 8px; font-size: 14px; color: #333; outline: none; transition: border-color 0.3s; background: rgba(255, 255, 255, 0.1);">
        </div>
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="password" style="display: block; font-weight: 600; color: #555; margin-bottom: 8px;">Password</label>
            <input type="password" id="password" name="password" required style="width: 100%; padding: 10px; border: 1px solid rgba(0, 0, 0, 0.3); border-radius: 8px; font-size: 14px; color: #333; outline: none; transition: border-color 0.3s; background: rgba(255, 255, 255, 0.1);">
        </div>
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="currency" style="display: block; font-weight: 600; color: #555; margin-bottom: 8px;">Currency</label>
            <input type="text" id="currency" name="currency" required style="width: 100%; padding: 10px; border: 1px solid rgba(0, 0, 0, 0.3); border-radius: 8px; font-size: 14px; color: #333; outline: none; transition: border-color 0.3s; background: rgba(255, 255, 255, 0.1);">
        </div>
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="country_id" style="display: block; font-weight: 600; color: #555; margin-bottom: 8px;">Country ID</label>
            <input type="text" id="country_id" name="country_id" required style="width: 100%; padding: 10px; border: 1px solid rgba(0, 0, 0, 0.3); border-radius: 8px; font-size: 14px; color: #333; outline: none; transition: border-color 0.3s; background: rgba(255, 255, 255, 0.1);">
        </div>
        <div class="form-group">
            <button type="submit" style="width: 100%; padding: 12px 24px; background-color: rgba(74, 74, 74, 0.8); color: #fff; border: none; border-radius: 8px; font-size: 14px; font-weight: 600; cursor: pointer; transition: background-color 0.3s;">Create Lead</button>
        </div>
    </form>
</div>
 
@endsection

