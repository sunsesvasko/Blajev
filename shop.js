const leftCol = document.querySelector('.leftCol');
const rightCol = document.querySelector('.rightCol');

const displayProducts = function() {
  const html = `                        
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

  for(let i = 0; i < 5; i++) {
    leftCol.insertAdjacentHTML('beforeend', html);
    rightCol.insertAdjacentHTML('beforeend', html);
  }
}();