<?php

/*
 * This file is part of ecnu-im/sticky-sidenav.
 *
 * Copyright (c) 2022 merc.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace ECNUIM\StickySidenav;

use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        
        ->css(__DIR__.'/less/forum.less'),
    
    
];
