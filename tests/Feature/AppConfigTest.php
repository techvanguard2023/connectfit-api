<?php

it('returns the configured app versions without authentication', function () {
    config([
        'connectfit.app.min_supported_version' => '1.2.0',
        'connectfit.app.latest_version' => '1.4.1',
    ]);

    $this->getJson('/api/v1/app-config')
        ->assertOk()
        ->assertExactJson([
            'data' => [
                'api_version' => 'v1',
                'min_supported_version' => '1.2.0',
                'latest_version' => '1.4.1',
            ],
        ]);
});
