<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BossController extends Controller
{
    /**
     * Redirect to first boss
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/shriekwing/dps');
    }

    /**
     * Redirect old routes to new routes
     *
     * @return \Illuminate\Http\Response
     */
    public function boss(Request $request)
    {
        $bosses = [
            'shriekwing',
            'huntsman-altimor',
            'hungering-destroyer',
            'artificer-xymox',
            'sun-kings-salvation',
            'lady-inerva-darkvein',
            'council-of-blood',
            'sludgefist',
            'stone-legion-generals',
            'sire-denathrius',
        ];

        if(in_array($request['boss'], $bosses)) {
            return redirect('/'.$request['boss'].'/dps');
        }

        abort(404);
    }

    /**
     * Show all pages
     *
     * @return \Illuminate\Http\Response
     */
    public function bosses(Request $request)
    {
        $bosses = [
            'shriekwing',
            'huntsman-altimor',
            'hungering-destroyer',
            'artificer-xymox',
            'sun-kings-salvation',
            'lady-inerva-darkvein',
            'council-of-blood',
            'sludgefist',
            'stone-legion-generals',
            'sire-denathrius',
        ];

        if(in_array($request['boss'], $bosses)) {

            $boss = $request['boss'];
            $role = $request['role'];

            // Wrathion
            if($boss == 'shriekwing') {
                $assignments = [
                    'tank' => 'Set markers around the room',
                    'dps' => '<a class="text-mechanic" target="_blank" href="https://ptr.wowhead.com/spell=308682/scales-of-wrathion"></a>',
                    'healer' => ''
                ];
                $phaseOne = [
                    'tank' => [
                        'PHASE 1',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 1',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 1',
                        'notes' => [],
                    ],
                ];
                $phaseTwo = [
                    'tank' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                ];
                $phaseThree = [
                    'tank' => [
                        'PHASE 3',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 3',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 3',
                        'notes' => [],
                    ],
                ];
                $mythic = [];
            }

            // Maut
            if($boss == 'huntsman-altimor') {
                $assignments = [
                    'tank' => 'Set Diamond Marker for first void zone drops',
                    'dps' => 'Mark somebody or right on  back of boss for phase 2 stack',
                    'healer' => 'Stand with ranged or melee'
                ];
                $phaseOne = [
                    'tank' => [
                        'PHASE 1',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 1',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 1',
                        'notes' => [],
                    ],
                ];
                $phaseTwo = [
                    'tank' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                ];
                $phaseThree = [
                    'tank' => [
                        'PHASE 3',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 3',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 3',
                        'notes' => [],
                    ],
                ];
                $mythic = [];
            }

            // skitra
            if($boss == 'hungering-destroyer') {
                $assignments = [
                    'tank' => 'One tank sets markers for phase 2 on each add and we match the other side',
                    'dps' => 'Stack with group',
                    'healer' => 'Stack with group'
                ];
                $phaseOne = [
                    'tank' => [
                        'PHASE 1',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 1',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 1',
                        'notes' => [],
                    ],
                ];
                $phaseTwo = [
                    'tank' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                ];
                $phaseThree = [
                    'tank' => [
                        'PHASE 3',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 3',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 3',
                        'notes' => [],
                    ],
                ];
                $mythic = [];
            }

            // inquisitor
            if($boss == 'artificer-xymox') {
                $assignments = [
                    'tank' => 'Mark tanks',
                    'dps' => 'Assign soccer player rotations, groups of 3 (Heroic only. mythic everyone helps) for <a class="text-mechanic" target="_blank" href="https://www.wowhead.com/spell=312336/void-ritual"></a>',
                    'healer' => ''
                ];
                $phaseOne = [
                    'tank' => [
                        'PHASE 1',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 1',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 1',
                        'notes' => [],
                    ],
                ];
                $phaseTwo = [
                    'tank' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                ];
                $phaseThree = [
                    'tank' => [
                        'PHASE 3',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 3',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 3',
                        'notes' => [],
                    ],
                ];
                $mythic = [];
            }

            // hivemind
            if($boss == 'sun-kings-salvation') {
                $assignments = [
                    'tank' => 'Mark tanks',
                    'dps' => 'Assign 2 person interrupts for <a class="text-mechanic" target="_blank" href="https://www.wowhead.com/spell=313652/mind-numbing-nova"></a> (from <a class="text-mechanic" target="_blank" href="https://www.wowhead.com/npc=157253/kazir"></a>)',
                    'healer' => ''
                ];
                $phaseOne = [
                    'tank' => [
                        'BOTH PHASES',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 1 - STACK PHASE',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 1 - STACK PHASE',
                        'notes' => [],
                    ],
                ];
                $phaseTwo = [
                    'tank' => [
                        'PHASE 2 - SPREAD PHASE',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 2 - SPREAD PHASE',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 2 - SPREAD PHASE',
                        'notes' => [],
                    ],
                ];
                $phaseThree = [
                    'tank' => [
                        'PHASE 3',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 3',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 3',
                        'notes' => [],
                    ],
                ];
                $mythic = [];
            }

            // shadhar
            if($boss == 'lady-inerva-darkvein') {
                $assignments = [
                    'tank' => '',
                    'dps' => '',
                    'healer' => 'Assign spot healer?'
                ];
                $phaseOne = [
                    'tank' => [
                        'PHASE 1',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 1',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 1',
                        'notes' => [],
                    ],
                ];
                $phaseTwo = [
                    'tank' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                ];
                $phaseThree = [
                    'tank' => [
                        'PHASE 3',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 3',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 3',
                        'notes' => [],
                    ],
                ];
                $mythic = [];
            }

            // drestagath
            if($boss == 'council-of-blood') {
                $assignments = [
                    'tank' => 'Mark Tanks',
                    'dps' => '',
                    'healer' => ''
                ];
                $phaseOne = [
                    'tank' => [
                        'PHASE 1',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 1',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 1',
                        'notes' => [],
                    ],
                ];
                $phaseTwo = [
                    'tank' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                ];
                $phaseThree = [
                    'tank' => [
                        'PHASE 3',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 3',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 3',
                        'notes' => [],
                    ],
                ];
                $mythic = [];
            }

            // vexiona
            if($boss == 'sludgefist') {
                $assignments = [
                    'tank' => 'Set initial Diamond Markers for void drops',
                    'dps' => '',
                    'healer' => ''
                ];
                $phaseOne = [
                    'tank' => [
                        'PHASE 1',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 1',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 1',
                        'notes' => [],
                    ],
                ];
                $phaseTwo = [
                    'tank' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                ];
                $phaseThree = [
                    'tank' => [
                        'PHASE 3',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 3',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 3',
                        'notes' => [],
                    ],
                ];
                $mythic = [];
            }

            // ilgynoth
            if($boss == 'stone-legion-generals') {
                $assignments = [
                    'tank' => '',
                    'dps' => '',
                    'healer' => ''
                ];
                $phaseOne = [
                    'tank' => [
                        'PHASE 1',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 1',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 1',
                        'notes' => [],
                    ],
                ];
                $phaseTwo = [
                    'tank' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                ];
                $phaseThree = [
                    'tank' => [
                        'PHASE 3',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 3',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 3',
                        'notes' => [],
                    ],
                ];
                $mythic = [];
            }

            // raden
            if($boss == 'sire-denathrius') {
                $assignments = [
                    'tank' => 'Set markers around room',
                    'dps' => '',
                    'healer' => ''
                ];
                $phaseOne = [
                    'tank' => [
                        'PHASE 1',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 1',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 1',
                        'notes' => [
                            'Heal off healing absorb <a class="text-mechanic" target="_blank" href="https://www.wowhead.com/spell=306184/unleashed-void"></a>'
                        ],
                    ],
                ];
                $phaseTwo = [
                    'tank' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 2',
                        'notes' => [],
                    ],
                ];
                $phaseThree = [
                    'tank' => [
                        'PHASE 3',
                        'notes' => [],
                    ],
                    'dps' => [
                        'PHASE 3',
                        'notes' => [],
                    ],
                    'healer' => [
                        'PHASE 3',
                        'notes' => [],
                    ],
                ];
                $mythic = [];
            }

            return view('boss', compact('boss', 'role', 'assignments', 'phaseOne', 'phaseTwo', 'phaseThree', 'mythic'));
        }

        abort(404);

    }
}
