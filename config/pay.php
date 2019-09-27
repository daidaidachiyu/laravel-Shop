<?php

return [
    'alipay' => [
        'app_id'         => '2016101200671249',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAvTRWxYJm61jbIOKxZifRhbVwN77QLJBx+G8VlUlQCqmzheItp+ELMlbl0vQAve+CFiLmZ7/cZh5Uff5r1JDH0F/EgA7p0l1yxH1HHI8vwbB+IpDPEi83Uj+cioQPEUmABNS+0o3N2QfAOjIJ+2wFuvMDPwhvjxZqwkaP8llse/5nG8Z6yvwYkxfXJqzkPxBm4We6Zg1SahWWb1SEsWyB05M7OR7PeL0V4wEQDAxWXnVzkUBuzJmcEYAFKgL2KwvkQfuTcjvBGIK+NB4wxAKibCMyo+SdSXmrXLtbxeSO+PONX8fzZwXvfa1anoZEKdZbMQTqo1hXnVsgMON5hQiYrwIDAQAB',
        'private_key'    => 'MIIEogIBAAKCAQEAgVp82a0OBJVfKeSm7ZnE88kiIF8Ok2zObioEHTg5C4wqbx0Y0MM9YaF7Sj/rYUx6jSbR8QXoDF20k3ZFZOrFJuICBGxDiM/bAL8JB88TgRPzJfa6T6a67wt+qn8/rTuG0KXckGka2+8XONEO6n4SaW1H6IuibHJySaVN5+bhwVejtfPsuu/ZqFaCGB5HvDguCbc3EHQOPEfH3UH8JAVNgNUq0y+yHbfAbGFjQWjYCp3qWyKlUYFARRN7AhtoQPrNBdG8znPYQAQPt+qAdm/qb1nkAqcufMV8le5+A8aB1SrDpJI6OfJSU7kLbtaWdoo8xSwSspllxaf+BcIM0Iy7awIDAQABAoIBAErwcYRqjcR6BTfwEAV3IHNcAzld2MPwNWf9T4TeHa5i9fKJmObZNaZqN1M81ND5zcYYx2grU9RWNVd5HZrpqG5uYVzOnBGW2foEsuajQVl2hVdpKWcb4RC8SBXewrVJ10Dp1m6TdcwVKA7yjwGrKF+LwC0pOGA7rZqc+hVv3Tp1CKd4FVgst2ITF8ivLJviDQKdYokP8hqdamyuQ5/s5w2I5FD8CV+sFe2F8skTVoaUnl9SiO53W8WiwZlcfjThcEoqmciqIx7kzVfhKOOLSv3hEIoeWRoKc6StFWLkViBS45I1TuulR6f5WcgLw51/GM7w4UhVBK7f59xJGOVwDIECgYEAurbgVTV9iRmMB6E8yYOL14LsCpXel4jCdkBOVO8U3YDJ+2bliW1vwGCwTuZMDnLLijH6Qvx3rzbEzs27PrKqcptzrmklq60Pak7ctLpONWXr0tkV0d54HKlY8qG9c4ZQUTUzAtYPsubKcwYpmmf5h0V8iOAsUgltfcHNyiGBFicCgYEAsVqN134Yxukfvsf1vSYgdxMvCUQyB9ZC8Dyp+AV341ya+ivh/A4Zrof/Zgcj6Qb4o8Zw7pHhQhuWJgcUKd7LhIS5gxmnoqRg+7yr1dgLYsUrFYKTmwZGYMsHSlTO9JngkebX7UUcbKHk+28A1jyBBhk98Fqi7fNuq3F5IlRdnx0CgYBw38tgV7TrY+FOX4ADBp5Mi54sjAuDqi59FEUGfX4spgX1EHBlEx6CuzD6kaia93Tqt2nmgv/LkZ2Ks76lmZcHL8jQQEqArV9rUf+E1jgfed0FmyzgsdAE66+VBogkRadaYIHVDhlxeqoavTf7Wy3zQ+OUT4kbkw14/+drcbO68wKBgB3FPpQStaQGE+8Zb7WdhcuXK8kZanCIVdovxLQ+br56mAUwgpGl6Ee0ynlc73k5U1ligSh60l4fdVfSzl6s6GrJQL6x+sLBZwo6xHlz941P3YiRz6cxKXUr/4BJtie3AMxc/Jf2huvxTRerrW9I3rugVxZWkIzy1PvwY04Q7Vo9AoGASy5m3P9Ue6MsvMAQflOlMXvNdUMcd08ksw4YRldRknmNLHw3LuUmR7NQYrqEGIN/B8Gzhusu8SyX0anm275wD/UmbYFGgqEgDYIlLpt1YDltddtAdkBWNfAaKbSurHvbACUPMOs/tJ6/5Wyc634HPQ+7OK4Bq5Wz+Nw3cJmEj1g=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];