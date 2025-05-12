<?php

use function Livewire\Volt\layout;
use function Livewire\Volt\state;

layout('livewire.components.layouts.guest');
$menu = [
  [
      'title' => 'Sales Analysis',
      'description' => 'Visualize trends and performance from your sales data.',
      'image' => '/assets/images/dashboard.png',
  ],
  [
      'title' => 'Inventory Control',
      'description' => 'Effortlessly track and manage stock across your store.',
      'image' => '/assets/images/stock-management.png',
  ],
  [
      'title' => 'Integrated Payment Calculator',
      'description' => 'Handle manual or automated transactions easily in one place.',
      'image' => '/assets/images/calculator-payment.png',
  ],
];

$prices = [
  [
    'title' => 'Simplified',
    'description' => 'Track retail sales and inventory at your location.',
    'price' => '$20.00',
    'button' => 'Contact Us',
    'route' => '',
    'includes' => [
        'All core POS features',
        'Automated updates',
        'Email support',
    ],
    'excludes' => [
        'ManageMemberships.com integration',
        'Credit card or online payment processing',
    ],
],
  [
      'title' => 'Premium',
      'description' => 'Sync with ManageMemberships.com.',
      'price' => '$150.00',
      'button' => 'Contact Us',
      'route' => '',
      'includes' => [
          'All core POS features',
          'Automated updates',
          'Email support',
          'ManageMemberships.com integration',
          'Transaction fees: 4% + $0.30 per transaction',
      ],
      'excludes' => [
          
      ],
  ],
];

$mainFeatures = [
  [
      'title' => 'Cloud Hosted',
      'description' => 'Access your POS from anywhere with our hosted infrastructure.',
      'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 0 0 4.5 4.5H18a3.75 3.75 0 0 0 1.332-7.257 3 3 0 0 0-3.758-3.848 5.25 5.25 0 0 0-10.233 2.33A4.502 4.502 0 0 0 2.25 15Z"/></svg>',
  ],
  [
      'title' => 'Fully Integrated',
      'description' => 'Connect seamlessly with ManageMemberships.com for unified billing and tracking.',
      'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25v13.5a.75.75 0 0 0 1.28.53L8.5 15.56a.75.75 0 0 1 1.06 0l2.72 2.72a.75.75 0 0 0 1.28-.53V5.25a.75.75 0 0 0-1.28-.53L9.56 7.94a.75.75 0 0 1-1.06 0L5.03 4.72A.75.75 0 0 0 3.75 5.25Z"/></svg>',
  ],
  [
      'title' => 'Tailored Support',
      'description' => 'Email-based support with onboarding assistance available.',
      'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12a9.75 9.75 0 1 1 19.5 0 9.75 9.75 0 0 1-19.5 0ZM12 7.5v3.75m0 3.75h.008v.008H12V15Z"/></svg>',
  ],
];

state([
  'menu' => $menu,
  'prices' => $prices,
  'mainFeatures' => $mainFeatures,
]);

?>

<div>
  <section id="main-feature" class="bg-gray-800 text-white py-32">
    <div class="md:max-w-5xl max-w-1xl mx-auto">
      <div class="mb-20 grid grid-cols-1 gap-y-5">
        <img src="https://managememberships.com/images/logo.png" class="w-32 mx-auto" alt="Logo">
        <p class="text-4xl font-extrabold text-center">Manage Register</p>
      </div>
      <div class="grid sm:grid-cols-3 grids-cols-3 lg:gap-20 gap-10 px-10">
        @foreach($mainFeatures as $feature)
        <div class="flex gap-x-4">
          <div class="bg-lakasir-primary rounded-2xl flex justify-center items-center min-w-10 h-10">
            {!! $feature['icon'] !!}
          </div>
          <div>
            <p class="text-2xl font-bold">{{ $feature['title'] }}</p>
            <p class="text-gray-400 lg:w-4/5">{{ $feature['description'] }}</p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <section id="price">
    <div class="mx-auto max-w-7xl py-24 px-6 lg:px-8">
      <div class="sm:align-center sm:flex sm:flex-col">
        <p class="text-4xl font-extrabold text-center">Options</p>
        <p class="mt-5 text-xl text-gray-500 sm:text-center"></p>
      </div>
      <div class="mt-12 space-y-4 sm:mt-16 sm:grid sm:grid-cols-2 sm:gap-6 sm:space-y-0 mx-auto max-w-4xl xl:mx-0 xl:max-w-none justify-items-center">
        @foreach($prices as $price)
        <div class="divide-y divide-gray-200 rounded-lg border border-gray-200 shadow-sm w-80">
          <div class="p-6">
            <p class="text-lg font-medium leading-6 text-gray-900">{{ $price['title'] }}</p>
            <p class="mt-4 text-sm text-gray-500">{{ $price['description'] }}</p>
            <p class="mt-8">
              <span class="text-4xl font-bold tracking-tight text-gray-900">{{ $price['price'] }}</span> <span class="text-base font-medium text-gray-500">/month</span>
            </p>
            <a href="mailto:jon@managememberships.com"
              class="mt-8 block w-full rounded-md border border-gray-800 bg-gray-800 py-2 text-center text-sm font-semibold text-white hover:bg-gray-900">
              {{ $price['button'] }}
            </a>
          </div>
          <div class="px-6 pt-6 pb-8">
            <h3 class="text-sm font-medium text-gray-900">Termasuk</h3>
            <ul role="list" class="mt-6 space-y-4">
              @foreach($price['includes'] as $include)
              <li class="flex space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-5 w-5 flex-shrink-0 text-green-500">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd">
                  </path>
                </svg>
                <span class="text-sm text-gray-500">{{ $include }}</span>
              </li>
              @endforeach
              @foreach($price['excludes'] as $exclude)
              <li class="flex space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 flex-shrink-0 text-red-500">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>

                <span class="text-sm text-gray-500">{{ $exclude }}</span>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <section id="footer" class="bg-gray-800 text-white py-10 flex justify-center gap-x-3">
    This project is a modified version of <a href="https://github.com/lakasir/lakasir" target="_blank">Lakasir</a> originally licensed under the GPL. All changes are © <?= date('Y') ?> Dayat Enterprises, INC. This version is not affiliated with the original authors.
  </section>
</div>
