<?php

namespace Lemaur\CmsUi\Commands;

use Illuminate\Console\Command;

class CmsUiCommand extends Command
{
    public $signature = 'cms-ui';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
