const leftCol = document.querySelector('.leftCol');
const rightCol = document.querySelector('.rightCol');

const displayProducts = function() {
  const men = `
        <div class="flex gap-5 w-full h-[200px] bg-white border-[1px] border-gray-300 p-3">
            <img src="/images/whiteTee.jpg" class="w-[260px] h-auto inline-block">
            <div class="flex flex-col gap-3 pt-2 max-[820px]:justify-center">
                <a href="productPage.html"><p class="font-semibold text-center text-[15px] mb-[-10px]">Men's Essential Tee <span class="opacity-[0.5]">(Black)</span></p></a>
                <p class="font-semibold text-[15px] mb-10">$32.00</p>
                <ul class="flex gap-2">
                    <li class="w-[20px] h-[20px] rounded-full bg-black hover:cursor-pointer hover:border-[2px] hover:border-gray-400"></li>
                    <li class="w-[20px] h-[20px] rounded-full bg-red-700 hover:cursor-pointer hover:border-[2px] hover:border-gray-400"></li>
                    <li class="w-[20px] h-[20px] rounded-full bg-purple-800 hover:cursor-pointer hover:border-[2px] hover:border-gray-400"></li>
                    <li class="w-[20px] h-[20px] rounded-full bg-green-800 hover:cursor-pointer hover:border-[2px] hover:border-gray-400"></li>
                </ul>
                <ul class="flex gap-2">
                    <li class="w-[25px] h-auto rounded-xs hover:cursor-pointer border-[1px] border-gray-300 text-[12px] font-bold text-gray-500 text-center hover:bg-gray-300">XS</li>
                    <li class="w-[25px] h-auto rounded-xs hover:cursor-pointer border-[1px] border-gray-300 text-[12px] font-bold text-gray-500 text-center hover:bg-gray-300">S</li>
                    <li class="w-[25px] h-auto rounded-xs hover:cursor-pointer border-[1px] border-gray-300 text-[12px] font-bold text-gray-500 text-center hover:bg-gray-300">M</li>
                    <li class="w-[25px] h-auto rounded-xs hover:cursor-pointer border-[1px] border-gray-300 text-[12px] font-bold text-gray-500 text-center hover:bg-gray-300">L</li>
                    <li class="w-[25px] h-auto rounded-xs hover:cursor-pointer border-[1px] border-gray-300 text-[12px] font-bold text-gray-500 text-center hover:bg-gray-300">XL</li>
                </ul>
            </div>
        </div>`;

  const women = `                        
  <div class="flex gap-5 w-full h-[200px] bg-white border-[1px] border-gray-300 p-3">
      <img src="/images/whiteTee.jpg" class="w-[260px] h-auto inline-block">
      <div class="flex flex-col gap-3 pt-2 max-[820px]:justify-center">
          <a href="productPage.html"><p class="font-semibold text-center text-[15px] mb-[-10px]">Women's Essential Tee <span class="opacity-[0.5]">(Black)</span></p></a>
          <p class="font-semibold text-[15px] mb-10">$32.00</p>
          <ul class="flex gap-2">
              <li class="w-[20px] h-[20px] rounded-full bg-black hover:cursor-pointer hover:border-[2px] hover:border-gray-400"></li>
              <li class="w-[20px] h-[20px] rounded-full bg-red-700 hover:cursor-pointer hover:border-[2px] hover:border-gray-400"></li>
              <li class="w-[20px] h-[20px] rounded-full bg-purple-800 hover:cursor-pointer hover:border-[2px] hover:border-gray-400"></li>
              <li class="w-[20px] h-[20px] rounded-full bg-green-800 hover:cursor-pointer hover:border-[2px] hover:border-gray-400"></li>
          </ul>
          <ul class="flex gap-2">
              <li class="w-[25px] h-auto rounded-xs hover:cursor-pointer border-[1px] border-gray-300 text-[12px] font-bold text-gray-500 text-center hover:bg-gray-300">XS</li>
              <li class="w-[25px] h-auto rounded-xs hover:cursor-pointer border-[1px] border-gray-300 text-[12px] font-bold text-gray-500 text-center hover:bg-gray-300">S</li>
              <li class="w-[25px] h-auto rounded-xs hover:cursor-pointer border-[1px] border-gray-300 text-[12px] font-bold text-gray-500 text-center hover:bg-gray-300">M</li>
              <li class="w-[25px] h-auto rounded-xs hover:cursor-pointer border-[1px] border-gray-300 text-[12px] font-bold text-gray-500 text-center hover:bg-gray-300">L</li>
              <li class="w-[25px] h-auto rounded-xs hover:cursor-pointer border-[1px] border-gray-300 text-[12px] font-bold text-gray-500 text-center hover:bg-gray-300">XL</li>
          </ul>
      </div>
  </div>`;




  for(let i = 0; i < 5; i++) {
    leftCol.insertAdjacentHTML('beforeend', men);
    rightCol.insertAdjacentHTML('beforeend', women);
  }
}();

if(localStorage.getItem('user')) {
  const profileIcon = '<a href="./profilePage.html"><svg class="w-[29px]" width="46" height="46" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M3.75 9.938V21a.75.75 0 0 0 .75.75H9v-6.375a1.125 1.125 0 0 1 1.125-1.125h3.75A1.125 1.125 0 0 1 15 15.375v6.375h4.5a.75.75 0 0 0 .75-.75V9.937"></path><path d="m22.5 12-9.99-9.563c-.234-.248-.782-.25-1.02 0L1.5 11.999"></path><path d="M18.75 8.39V3H16.5v3.234"></path></svg></a>';
  document.getElementById('icons').insertAdjacentHTML('afterbegin', profileIcon);
} else {
  const signUp = '<a href="./signUp.html"><svg class="w-[30px] text-black transition duration-100 ease-in-out delay-150 rounded-lg cursor-pointer hover:-translate-y-1 hover:scale-100" width="46" height="46" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><path d="M8.5 3a4 4 0 1 0 0 8 4 4 0 1 0 0-8z"></path><path d="M20 8v6"></path><path d="M23 11h-6"></path></svg></a>';
  document.getElementById('icons').insertAdjacentHTML('afterbegin', signUp);
}