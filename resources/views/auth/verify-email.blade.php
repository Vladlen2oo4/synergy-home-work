<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Спасибо за&nbsp;регистрацию! Прежде чем начать, не&nbsp;могли&nbsp;бы вы&nbsp;подтвердить свой адрес электронной почты, перейдя по&nbsp;ссылке, которую мы&nbsp;только что отправили вам по&nbsp;электронной почте? Если вы&nbsp;не&nbsp;получили электронное письмо, мы&nbsp;с&nbsp;радостью вышлем вам другое.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
            {{ __('На&nbsp;адрес электронной почты, который вы&nbsp;указали при регистрации, была отправлена новая ссылка для подтверждения.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Выслать повторно письмо для подтверждения') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 dark:focus:ring-offset-gray-800">
                {{ __('Выйти') }}
            </button>
        </form>
    </div>
</x-guest-layout>
