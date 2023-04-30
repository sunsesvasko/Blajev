// Generate Latest Products - [START] 

const latestProductsFirstRow = document.querySelector('.latestProducts--firstRow');
const latestProductsSecondRow = document.querySelector('.latestProducts--secondRow');

const displayLatestProducts = function() {
  const html = `<!-- Flip Card on Hover Effect -->
  <div id="flip-card" class="w-[273px] h-[205.14px] mb-10 max-[1250px]:w-[200px] max-[1000px]:w-[175px] max-[825px]:w-[273px]">
      <!-- Front & Back Container -->
      <div id="flip-card-inner">
          <!-- Front of the Card -->
          <div id="flip-card-front" class="rounded-[10px]">
              <div class="relative">
                  <img src="/images/product.jpg" class="w-[275px] h-auto rounded-[10px]">
                  <p class="text-center">Men's Essential Tee <span class="opacity-[0.5]">(Black)</span></p>
                  <p class="text-[20px] mb-[3px] text-center">$32.00</p>
                </div>
          </div>
          <!-- Back of the Card -->
          <div id="flip-card-back">
              <img src="/images/product.jpg" class="relative w-auto h-auto rounded-[10px] blur-[3px]">
              <a href="#" id="product-page" class="absolute top-[20%] left-[20%] bg-white text-black border-[1px] border-gray-500 p-[10px] w-auto blur-none hover:bg-[#ffffffd2]"><button id="open-modal">Change</button></a>
          </div>
      </div>
  </div>`;

    for(let i = 0; i < 4; i++) {
      latestProductsFirstRow.insertAdjacentHTML('beforeend', html);
      latestProductsSecondRow.insertAdjacentHTML('beforeend', html);
    }
}();

if(localStorage.getItem('user')) {
  const profileIcon = '<a href="./profilePage.html"><svg class="w-[29px]" width="46" height="46" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M3.75 9.938V21a.75.75 0 0 0 .75.75H9v-6.375a1.125 1.125 0 0 1 1.125-1.125h3.75A1.125 1.125 0 0 1 15 15.375v6.375h4.5a.75.75 0 0 0 .75-.75V9.937"></path><path d="m22.5 12-9.99-9.563c-.234-.248-.782-.25-1.02 0L1.5 11.999"></path><path d="M18.75 8.39V3H16.5v3.234"></path></svg></a>';
  document.getElementById('icons').insertAdjacentHTML('afterbegin', profileIcon);
} else {
  const signUp = '<a href="./signUp.html"><svg class="w-[30px] text-black transition duration-100 ease-in-out delay-150 rounded-lg cursor-pointer hover:-translate-y-1 hover:scale-100" width="46" height="46" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><path d="M8.5 3a4 4 0 1 0 0 8 4 4 0 1 0 0-8z"></path><path d="M20 8v6"></path><path d="M23 11h-6"></path></svg></a>';
  document.getElementById('icons').insertAdjacentHTML('afterbegin', signUp);
}



// LogOut
// localStorage.removeItem('user);

// TO-DO: 
// Implement displaying random products instead of fixed

// Generate Latest Products - [END] 

