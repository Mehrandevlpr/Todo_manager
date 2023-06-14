<?php

return
[
     // ------------------------------------------  login and register
     
     '/login'     =>[
          'target'    => 'login_register@login',
          'methode'   => 'get|post',
          'middleware'=> null
     ],
     'register'  =>[
          'target'    => 'login_register@register',
          'methode'   => 'get|post',
          'middleware'=> null
     ],

     // ------------------------------------------  chat route

     '/'            =>[
          'target'    => 'login@index',
          'methode'   => 'post',
          'middleware'=> null
     ],
     '/login' =>[
          'target'    => 'login@register',
          'methode'   => 'get|post',
          'middleware'=> null
     ],
     '/main'=>[
          'target'    => 'login@main',
          'methode'   => 'get|post',
          'middleware'=> null
     ]

]

?>