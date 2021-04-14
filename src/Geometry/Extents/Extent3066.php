<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Antarctic/Antarctica - 80°S to 84°S, 60°W to 30°W (SU21-25).
 * @internal
 */
class Extent3066
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-60, -80], [-60, -80.307692307692], [-60, -80.615384615385], [-60, -80.923076923077], [-60, -81.230769230769], [-60, -81.538461538462], [-60, -81.846153846154], [-60, -82.153846153846], [-60, -82.461538461538], [-60, -82.769230769231], [-60, -83.076923076923], [-60, -83.384615384615], [-60, -83.692307692308], [-60, -84], [-59.67032967033, -84], [-59.340659340659, -84], [-59.010989010989, -84], [-58.681318681319, -84], [-58.351648351648, -84], [-58.021978021978, -84], [-57.692307692308, -84], [-57.362637362637, -84], [-57.032967032967, -84], [-56.703296703297, -84], [-56.373626373626, -84], [-56.043956043956, -84], [-55.714285714286, -84], [-55.384615384615, -84], [-55.054945054945, -84], [-54.725274725275, -84], [-54.395604395604, -84], [-54.065934065934, -84], [-53.736263736264, -84], [-53.406593406593, -84], [-53.076923076923, -84], [-52.747252747253, -84], [-52.417582417582, -84], [-52.087912087912, -84], [-51.758241758242, -84], [-51.428571428571, -84], [-51.098901098901, -84], [-50.769230769231, -84], [-50.43956043956, -84], [-50.10989010989, -84], [-49.78021978022, -84], [-49.450549450549, -84], [-49.120879120879, -84], [-48.791208791209, -84], [-48.461538461538, -84], [-48.131868131868, -84], [-47.802197802198, -84], [-47.472527472527, -84], [-47.142857142857, -84], [-46.813186813187, -84], [-46.483516483516, -84], [-46.153846153846, -84], [-45.824175824176, -84], [-45.494505494505, -84], [-45.164835164835, -84], [-44.835164835165, -84], [-44.505494505494, -84], [-44.175824175824, -84], [-43.846153846154, -84], [-43.516483516483, -84], [-43.186813186813, -84], [-42.857142857143, -84], [-42.527472527472, -84], [-42.197802197802, -84], [-41.868131868132, -84], [-41.538461538461, -84], [-41.208791208791, -84], [-40.879120879121, -84], [-40.549450549451, -84], [-40.21978021978, -84], [-39.89010989011, -84], [-39.56043956044, -84], [-39.230769230769, -84], [-38.901098901099, -84], [-38.571428571429, -84], [-38.241758241758, -84], [-37.912087912088, -84], [-37.582417582418, -84], [-37.252747252747, -84], [-36.923076923077, -84], [-36.593406593407, -84], [-36.263736263736, -84], [-35.934065934066, -84], [-35.604395604396, -84], [-35.274725274725, -84], [-34.945054945055, -84], [-34.615384615385, -84], [-34.285714285714, -84], [-33.956043956044, -84], [-33.626373626374, -84], [-33.296703296703, -84], [-32.967032967033, -84], [-32.637362637363, -84], [-32.307692307692, -84], [-31.978021978022, -84], [-31.648351648352, -84], [-31.318681318681, -84], [-30.989010989011, -84], [-30.659340659341, -84], [-30.32967032967, -84], [-30, -84], [-30, -83.692307692308], [-30, -83.384615384615], [-30, -83.076923076923], [-30, -82.769230769231], [-30, -82.461538461538], [-30, -82.153846153846], [-30, -81.846153846154], [-30, -81.538461538462], [-30, -81.230769230769], [-30, -80.923076923077], [-30, -80.615384615385], [-30, -80.307692307692], [-30, -80], [-30.32967032967, -80], [-30.659340659341, -80], [-30.989010989011, -80], [-31.318681318681, -80], [-31.648351648352, -80], [-31.978021978022, -80], [-32.307692307692, -80], [-32.637362637363, -80], [-32.967032967033, -80], [-33.296703296703, -80], [-33.626373626374, -80], [-33.956043956044, -80], [-34.285714285714, -80], [-34.615384615385, -80], [-34.945054945055, -80], [-35.274725274725, -80], [-35.604395604396, -80], [-35.934065934066, -80], [-36.263736263736, -80], [-36.593406593407, -80], [-36.923076923077, -80], [-37.252747252747, -80], [-37.582417582418, -80], [-37.912087912088, -80], [-38.241758241758, -80], [-38.571428571429, -80], [-38.901098901099, -80], [-39.230769230769, -80], [-39.56043956044, -80], [-39.89010989011, -80], [-40.21978021978, -80], [-40.549450549451, -80], [-40.879120879121, -80], [-41.208791208791, -80], [-41.538461538462, -80], [-41.868131868132, -80], [-42.197802197802, -80], [-42.527472527473, -80], [-42.857142857143, -80], [-43.186813186813, -80], [-43.516483516484, -80], [-43.846153846154, -80], [-44.175824175824, -80], [-44.505494505495, -80], [-44.835164835165, -80], [-45.164835164835, -80], [-45.494505494506, -80], [-45.824175824176, -80], [-46.153846153846, -80], [-46.483516483517, -80], [-46.813186813187, -80], [-47.142857142857, -80], [-47.472527472528, -80], [-47.802197802198, -80], [-48.131868131868, -80], [-48.461538461539, -80], [-48.791208791209, -80], [-49.120879120879, -80], [-49.450549450549, -80], [-49.78021978022, -80], [-50.10989010989, -80], [-50.43956043956, -80], [-50.769230769231, -80], [-51.098901098901, -80], [-51.428571428571, -80], [-51.758241758242, -80], [-52.087912087912, -80], [-52.417582417582, -80], [-52.747252747253, -80], [-53.076923076923, -80], [-53.406593406593, -80], [-53.736263736264, -80], [-54.065934065934, -80], [-54.395604395604, -80], [-54.725274725275, -80], [-55.054945054945, -80], [-55.384615384615, -80], [-55.714285714286, -80], [-56.043956043956, -80], [-56.373626373626, -80], [-56.703296703297, -80], [-57.032967032967, -80], [-57.362637362637, -80], [-57.692307692308, -80], [-58.021978021978, -80], [-58.351648351648, -80], [-58.681318681319, -80], [-59.010989010989, -80], [-59.340659340659, -80], [-59.67032967033, -80], [-60, -80],
                ],
            ],
        ];
    }
}