<?php

return [
    [
        3905,
        5,
        1,
        1,
        [
            [
                1,
                1,
                1,
                1,
                1,
            ],
        ],
    ],
    [
        3186,
        2,
        1,
        2,
        [
            [
                1,
                2,
                3,
                4,
                5,
            ],
        ],
    ],
    ['#VALUE!', 'X', 1, 2, [1, 2, 3, 4, 5]],
    ['#VALUE!', 2, 'X', 2, [1, 2, 3, 4, 5]],
    ['#VALUE!', 2, 1, 'X', [1, 2, 3, 4, 5]],
    ['#VALUE!', 2, 1, 2, [1, 'X', 3, 4, 5]],
    ['#VALUE!', true, 1, 2, [1, 'X', 3, 4, 5]],
    ['#VALUE!', 2, 1, 2, [1, false, 3, 4, 5]],
    [780, 5, 1, 1, [1, 1, null, 1, 1]],
    [3780, 5, 1, 1, [1, 1, 0, 1, 1]],
    [756, 5, 0, 1, [1, 1, 0, 1, 1]],
    [756, 5, null, 1, [1, 1, 0, 1, 1]],
    [151.2, 5, -1, 1, [1, 1, 0, 1, 1]],
    [138.7, 5, -1, 1, [1, 1, -2.5, 1, 1]],
];
