


// Generate Latest Products - [START] 

const latestProductsFirstRow = document.querySelector('.latestProducts--firstRow');
const latestProductsSecondRow = document.querySelector('.latestProducts--secondRow');

const displayLatestProducts = function() {
  const html = `                
    <div class="relative">
      <img src="/images/product.jpg" class="w-[275px] h-auto rounded-[10px]">
      <p class="text-center">Men's Essential Tee <span class="opacity-[0.5]">(Black)</span></p>
      <p class="text-[20px] mb-[3px] text-center">$32.00</p>
      <svg class="absolute top-[10px] right-[10px] w-[30px] h-auto text-black hover:bg-[#DB2516] hover:text-white transition duration-100 ease-in-out delay-150 bg-[#E3DAF4] rounded-lg shadow-xl cursor-pointer hover:-translate-y-1 hover:scale-100"
      width="40" height="46" fill="none" stroke="currentColor" stroke-linecap="round"
      stroke-linejoin="round" stroke-width="2" viewBox="-3 0 30 25" xmlns="http://www.w3.org/2000/svg">
      <path
          d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
      </path>
      </svg>
    </div>`;

    for(let i = 0; i < 4; i++) {
      latestProductsFirstRow.insertAdjacentHTML('beforeend', html);
      latestProductsSecondRow.insertAdjacentHTML('beforeend', html);
    }
}();

document.getElementById('sign-up').addEventListener('click', () => { location.href = 'signUp.html'});

// TO-DO: 
// Implement displaying random products instead of fixed

// Generate Latest Products - [END] 

