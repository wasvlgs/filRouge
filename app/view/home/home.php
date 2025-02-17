<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up - CheerStay</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Custom CSS for smooth transitions */
    .hidden {
      display: none;
      opacity: 0;
      transition: opacity 0.3s ease-in-out;
    }
    .visible {
      display: flex;
      opacity: 1;
    }
  </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen font-sans">

  <!-- Sign Up Form -->
  <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-4xl">
    <h2 class="text-2xl font-bold text-center mb-6">Sign Up</h2>
    <form id="signupForm">
      <!-- Flex Container for Horizontal Layout -->
      <div class="flex flex-wrap -mx-4">
        <!-- Left Column (Common Fields) -->
        <div class="w-full md:w-1/2 px-4">
          <!-- First Name -->
          <div class="mb-4">
            <label for="firstName" class="block text-sm font-medium text-gray-700">First Name</label>
            <input type="text" id="firstName" name="firstName" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500" required>
          </div>

          <!-- Last Name -->
          <div class="mb-4">
            <label for="lastName" class="block text-sm font-medium text-gray-700">Last Name</label>
            <input type="text" id="lastName" name="lastName" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500" required>
          </div>

          <!-- Email -->
          <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500" required>
          </div>

          <!-- Telephone -->
          <div class="mb-4">
            <label for="tel" class="block text-sm font-medium text-gray-700">Telephone</label>
            <input type="tel" id="tel" name="tel" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500" required>
          </div>

          <!-- Password -->
          <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" id="password" name="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500" required>
          </div>

          <!-- User Type (Tourist or Hotel Owner) -->
          <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">You are a:</label>
            <div class="mt-2">
              <label class="inline-flex items-center">
                <input type="radio" name="userType" value="tourist" class="form-radio text-green-500" checked onchange="toggleHotelFields()">
                <span class="ml-2">Tourist</span>
              </label>
              <label class="inline-flex items-center ml-6">
                <input type="radio" name="userType" value="hotelOwner" class="form-radio text-green-500" onchange="toggleHotelFields()">
                <span class="ml-2">Hotel Owner</span>
              </label>
            </div>
          </div>
        </div>

        <!-- Right Column (Hotel Owner Fields - Hidden by Default) -->
        <div id="hotelOwnerFields" class="hidden w-full md:w-1/2 px-4">
          <!-- Address -->
          <div class="mb-4">
            <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
            <input type="text" id="address" name="address" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500">
          </div>

          <!-- Country -->
          <div class="mb-4">
            <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
            <select id="country" name="country" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500">
              <option value="">Select Country</option>
              <option value="USA">USA</option>
              <option value="UK">UK</option>
              <option value="France">France</option>
              <option value="Germany">Germany</option>
            </select>
          </div>

          <!-- City -->
          <div class="mb-4">
            <label for="city" class="block text-sm font-medium text-gray-700">City</label>
            <input type="text" id="city" name="city" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500">
          </div>

          <!-- Hotel Name -->
          <div class="mb-4">
            <label for="hotelName" class="block text-sm font-medium text-gray-700">Hotel Name</label>
            <input type="text" id="hotelName" name="hotelName" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500">
          </div>
        </div>
      </div>

      <!-- Submit Button -->
      <div class="mt-6">
        <button type="submit" class="w-full bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
          Sign Up
        </button>
      </div>
    </form>
  </div>

  <!-- JavaScript to Toggle Hotel Owner Fields -->
  <script>
    function toggleHotelFields() {
      const hotelOwnerFields = document.getElementById('hotelOwnerFields');
      const userType = document.querySelector('input[name="userType"]:checked').value;

      if (userType === 'hotelOwner') {
        hotelOwnerFields.classList.add('visible');
        hotelOwnerFields.classList.remove('hidden');
      } else {
        hotelOwnerFields.classList.add('hidden');
        hotelOwnerFields.classList.remove('visible');
      }
    }
  </script>
</body>
</html>