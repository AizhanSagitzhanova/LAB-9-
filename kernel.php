protected $middlewareGroups = [
'web' => [
\App\Http\Middleware\EncryptCookies:: class,
\Illuminate\Cookie\Middleware\
AddQueuesCookiesToResponse :: class ,
\Illuminate\Session\Middleware\StarSession :: class,
\Illuminate\View\Middleware\SharaErrorsFromSession::class,
\App\Http\Middleware\VerifyCsrfToken::class,
\Illuminate\Routing\Middleware\SubstituteBindings::class,
\App\Http\Middleware\Localization:: class,
],
