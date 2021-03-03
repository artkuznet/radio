<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

final class CreateUser extends Command
{
    /**
     * @var string
     */
    protected $signature = 'create:user {--name=} {--email=} {--password=}';

    public function handle(): void
    {
        $options = [
            'name' => '',
            'email' => '',
            'password' => '',
        ];

        foreach ($options as $key => $value) {
            $options[$key] = 'password' === $key
                ? Hash::make($this->option($key))
                : $this->option($key);
            if (!$options[$key]) {
                $this->error("Required option \"$key\" is missing");

                return;
            }
        }

        try {
            (new User($options))->save();
            $this->info('Done');
        } catch (\Exception $e) {
            $this->error($e->getMessage());
        }
    }
}