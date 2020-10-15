<?php

$config = array(

    'admin' => array(
        'core:AdminPassword',
    ),

    'example-userpass' => array(
        'exampleauth:UserPass',
        'user1:user1pass' => array(
            'uid' => array('1'),
            'eduPersonAffiliation' => array('group1'),
            'email' => 'user1@example.com',
        ),
        'user2:user2pass' => array(
            'uid' => array('2'),
            'eduPersonAffiliation' => array('group2'),
            'email' => 'user2@example.com',
        ),
        'user3:user3pass' => array(
            'uid' => array('johantenbroeke'),
            'emailaddress' => 'Johan@tenbroeke.com',
            'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/emailaddress' => 'Johan@tenbroeke.com'            
        ),
        'johan:johan' => array(
            'uid' => array('johantenbroeke'),
            'emailaddress' => 'Johan@tenbroeke.com',
            'attributes' => "dWlkPXVybiUzQWNvbGxhYiUzQXBlcnNvbiUzQWp1c3RpZC5ubCUzQWJyb2VrZWomYXV0aHNwX2xldmVsPTEwJnNlbF9hdXRoc3A9aHR0cHMlM0ElMkYlMkZlbmdpbmUuaWRwYnJva2VyLmFjY3Zlbmoucmlqa3N3ZWIubmwlMkZhdXRoZW50aWNhdGlvbiUyRmlkcCUyRm1ldGFkYXRhJmF1dGhzcF90eXBlPXNhbWwyMCZhdXRob3JpdHk9aHR0cHMlM0ElMkYlMkZhbG9naW4uanVzdGlkLm1pbnZlbmoubmwmZW1haWxhZGRyZXNzPUouVGVuQnJvZWtlJTQwanVzdGlkLm5sJmNsaWVudF9pcD0xMC40OC4xOTUuOTcmbGFuZ3VhZ2U9bmwmaHR0cCUzQSUyRiUyRnNjaGVtYXMueG1sc29hcC5vcmclMkZ3cyUyRjIwMDUlMkYwNSUyRmlkZW50aXR5JTJGY2xhaW1zJTJGZW1haWxhZGRyZXNzPUouVGVuQnJvZWtlJTQwanVzdGlkLm5sJnNlbF9sZXZlbD0xMCZuYW1lX2lkPXVybiUzQWNvbGxhYiUzQXBlcnNvbiUzQWp1c3RpZC5ubCUzQWJyb2VrZWomdXNlcl9hZ2VudD1Nb3ppbGxhJTJGNS4wKyUyOFdpbmRvd3MrTlQrMTAuMCUzQitXaW42NCUzQit4NjQlMjkrQXBwbGVXZWJLaXQlMkY1MzcuMzYrJTI4S0hUTUwlMkMrbGlrZStHZWNrbyUyOStDaHJvbWUlMkY4Ni4wLjQyNDAuNzUrU2FmYXJpJTJGNTM3LjM2",
            'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/emailaddress' => 'Johan@tenbroeke.com'            
        ),
    ),

);
