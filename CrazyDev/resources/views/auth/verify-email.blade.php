<x-guest-layout>
    <div class="mb-4 text-sm">
        {{ __('Merci de vous êtes inscrit. Vous avez presque terminé ! Il faut juste vérifier votre email. Si vous ne l\'avez pas reçu, vérifiez vos spams et sinon cliquez sur le bouton ci-dessous') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
            {{ __('Un nouveau lien a été envoyé à l\'email indiqué.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Renvoyer le mail de vérification') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2" style="color: #EEEEEE">
                {{ __('Se déconnecter') }}
            </button>
        </form>
    </div>
</x-guest-layout>
