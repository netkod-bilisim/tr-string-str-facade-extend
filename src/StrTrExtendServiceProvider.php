<?php

namespace NetkodBilisim;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

/**
 * Class StrTrExtendServiceProvider.
 */
class StrTrExtendServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Str::macro('trUppercase', function (string $value): string {
            return tr_strtoupper($value);
        });

        Str::macro('trLowercase', function (string $value): string {
            return tr_strtolower($value);
        });

        Str::macro('trUppercaseFirst', function (string $value): string {
            return tr_uppercase_first($value);
        });

        Str::macro('trLowercaseFirst', function (string $value): string {
            return tr_lowercase_first($value);
        });

        Str::macro('trUppercaseWords', function (string $value): string {
            return tr_uppercase_words($value);
        });
    }
}
