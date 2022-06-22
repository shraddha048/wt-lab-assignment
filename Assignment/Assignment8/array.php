<?php
$gcesstaffs=[
    "academic"=>[
        [
            "Name"=>"Rohit Thapa",
            "Address"=>"Unknown",
            "Contact"=>[
                "Number1"=>"9565767678",
                "Number2"=>"9862345616"

            ],
            "Subjects"=>[
                "Subject1"=>"MTH1",
                "Subject2"=>"MTH2"
            ]
            ],

            [
                "Name"=>"Asmit Gurung",
                "Address"=>"lamachaur",
                "Contact"=>[
                    "Number1"=>"9854646547",
                    "Number2"=>"9876767876"

                ],
                "Subjects"=>[
                    "Subject1"=>"wt",
                    "Subject2"=>"php"
                ]

                ],

                [
                    "Name"=>"Ram Karki",
                    "Address"=>"Mahendrapool",
                    "Contact"=>[
                        "Number1"=>"9856745665",
                        "Number2"=>"9878586575"

                    ],
                    "Subjects"=>[
                        "Subject1"=>"c",
                        "Subject2"=>"c++",
                    ]

                ]

                    ],

    "non-academic"=>[
        [
            "Name"=>"Herry Gautam",
            "Address"=>"Newroad",
            "Contact"=>[
                "Contact1"=>"9834512345",
                "Contact2"=>"9853423244"

            ]

        ],

        [
            "Name"=>"nischal Poudel",
            "Address"=>"Unknown",
            "Contact"=>[
                "Contact1"=>"9889899900",
                "Contact2"=>"9898768766"

            ]
        ]
    ]
];

foreach($gcesstaffs as $faculty=>$members){
    echo $faculty.":<br/><br/>";
    foreach($members as $data=>$specificdata){
        foreach($specificdata as $specificvalue=>$value){
            if(is_array($value) || is_object($value)){
                foreach($value as $i=>$j){
                    echo $i." = ".$j;
                    echo"<br/>";
                }
            }
            else{
                echo $specificvalue." = ".$value;
                echo"<br/>";
            }
        }
        echo "<br/>";
    }
}
?>