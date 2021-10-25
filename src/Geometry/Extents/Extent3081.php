<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Antarctic/Antarctica - Transantarctic mountains north of 80°S.
 * @internal
 */
class Extent3081
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [169.06118327491, -80.1], [169.18775184405, -80.038037089137], [169.39527877095, -79.936440203275], [169.60280569784, -79.834843317412], [169.82992044267, -79.687102562074], [170.0570351875, -79.539361806735], [170.28414993232, -79.391621051397], [170.51126467715, -79.243880296058], [170.73837942198, -79.09613954072], [171.03254335886, -78.993124079871], [171.32670729574, -78.890108619023], [171.62087123262, -78.787093158174], [171.9150351695, -78.684077697326], [172.20919910638, -78.581062236477], [172.50336304326, -78.478046775629], [172.79752698014, -78.37503131478], [173.09169091702, -78.272015853932], [173.3858548539, -78.169000393083], [173.68001879078, -78.065984932235], [173.78608138517, -77.811716223034], [173.89214397956, -77.557447513833], [173.99820657395, -77.303178804633], [174.10426916834, -77.048910095432], [173.86462108013, -76.917565942601], [173.62497299192, -76.786221789769], [173.38532490371, -76.654877636937], [173.1456768155, -76.523533484105], [172.8399741551, -76.443999446565], [172.53427149469, -76.364465409026], [172.22856883428, -76.284931371486], [171.92286617388, -76.205397333946], [171.61716351347, -76.125863296406], [171.31146085306, -76.046329258866], [171.28528383389, -75.817907039055], [171.25910681472, -75.589484819245], [171.23292979554, -75.361062599435], [171.52900299968, -75.227235820882], [171.82507620383, -75.093409042329], [172.12114940797, -74.759582263777], [172.41722261211, -74.625755485224], [172.5911651777, -74.345107405018], [172.7651077433, -74.064459324812], [172.93905030889, -73.783811244606], [172.95411886149, -73.504207815033], [172.96918741409, -73.22460438546], [172.98425596669, -72.945000955886], [172.99932451929, -72.665397526313], [173.01439307189, -72.38579409674], [172.78822870059, -72.146601688882], [172.56206432929, -71.907409281024], [172.33589995799, -71.668216873165], [172.1097355867, -71.429024465307], [171.83626170555, -71.298265129667], [171.5627878244, -71.167505794027], [171.28931394325, -71.036746458387], [171.01584006209, -70.905987122748], [170.74236618094, -70.775227787108], [170.46889229979, -70.644468451468], [170.19541841864, -70.513709115828], [169.89226551571, -70.442382572736], [169.58911261277, -70.371056029645], [169.28595970983, -70.299729486553], [168.9828068069, -70.228402943462], [168.67965390396, -70.15707640037], [168.37650100102, -70.085749857279], [168.07334809809, -70.014423314187], [167.77019519515, -69.943096771096], [167.46704229221, -69.871770228004], [167.16388938928, -69.800443684913], [166.87390391651, -69.755700827176], [166.58391844374, -69.710957969438], [166.29393297097, -69.666215111701], [166.0039474982, -69.621472253964], [165.71396202543, -69.576729396227], [165.42397655266, -69.53198653849], [165.1339910799, -69.487243680752], [164.83546401867, -69.443980639583], [164.53693695745, -69.400717598413], [164.23840989623, -69.357454557244], [163.93988283501, -69.314191516074], [163.64135577379, -69.270928474904], [163.34282871257, -69.227665433735], [163.04430165134, -69.184402392565], [162.74577459012, -69.141139351396], [162.4472475289, -69.097876310226], [161.94872046768, -69.054613269057], [161.63080084422, -69.000318305632], [161.31288122077, -68.946023342208], [160.99496159731, -68.891728378784], [160.67704197385, -68.83743341536], [160.3591223504, -68.783138451936], [160.04120272694, -68.728843488512], [159.72328310348, -68.674548525088], [159.40536348003, -68.620253561664], [159.08744385657, -68.56595859824], [158.75697318076, -68.556225603026], [158.42650250496, -68.546492607811], [158.09603182915, -68.536759612597], [157.76556115335, -68.527026617383], [157.43509047754, -68.517293622168], [157.10461980173, -68.507560626954], [156.81506356203, -68.536415666764], [156.52550732234, -68.565270706573], [156.23595108264, -68.594125746383], [155.94639484294, -68.622980786193], [155.65683860324, -68.651835826002], [155.43611051563, -68.847583711567], [155.21538242803, -69.043331597132], [155.18403888918, -69.342649266236], [155.15269535033, -69.641966935339], [155.12135181148, -69.941284604442], [155.09000827263, -70.240602273545], [155.05866473378, -70.539919942648], [155.02732119493, -70.839237611752], [154.99597765608, -71.138555280855], [154.86780627466, -71.399919754514], [154.73963489325, -71.661284228173], [154.61146351183, -71.922648701832], [154.48329213041, -72.184013175491], [154.35512074899, -72.44537764915], [154.22694936757, -72.706742122809], [154.05552958472, -72.989311316069], [153.88410980186, -73.271880509329], [153.712690019, -73.55444970259], [153.54127023615, -73.83701889585], [153.36985045329, -74.119588089111], [153.19843067043, -74.402157282371], [153.02701088757, -74.684726475631], [152.86918014514, -75.137765876722], [152.71134940271, -75.390805277812], [152.55351866028, -75.643844678903], [152.39568791784, -75.896884079994], [152.23785717541, -76.149923481084], [152.08002643298, -76.402962882175], [151.88281485837, -76.612371783718], [151.68560328375, -76.821780685262], [151.48839170914, -77.031189586806], [151.29118013453, -77.24059848835], [151.09396855992, -77.450007389893], [150.8967569853, -77.659416291437], [150.72165354612, -77.904515128989], [150.54655010694, -78.149613966541], [150.37144666776, -78.394712804093], [150.19634322858, -78.639811641645], [150.0212397894, -78.884910479197], [149.84613635021, -79.130009316749], [149.84260671001, -79.447008360769], [149.8390770698, -79.764007404789], [149.7769759816, -79.967736573815], [149.73665920844, -80.1], [150.0683003534, -80.1], [150.39994149837, -80.1], [150.73158264334, -80.1], [151.06322378831, -80.1], [151.39486493327, -80.1], [151.72650607824, -80.1], [152.05814722321, -80.1], [152.38978836818, -80.1], [152.72142951314, -80.1], [153.05307065811, -80.1], [153.38471180308, -80.1], [153.71635294805, -80.1], [154.04799409301, -80.1], [154.37963523798, -80.1], [154.71127638295, -80.1], [155.04291752792, -80.1], [155.37455867288, -80.1], [155.70619981785, -80.1], [156.03784096282, -80.1], [156.36948210779, -80.1], [156.70112325275, -80.1], [157.03276439772, -80.1], [157.36440554269, -80.1], [157.69604668766, -80.1], [158.02768783262, -80.1], [158.35932897759, -80.1], [158.69097012256, -80.1], [158.7979284923, -80.098733455471], [159.11533023298, -80.098324004574], [159.43273197365, -80.097914553677], [159.75013371432, -80.09750510278], [160.067535455, -80.097095651883], [160.38493719567, -80.096686200985], [160.70233893635, -80.096276750088], [161.01974067702, -80.095867299191], [161.3371424177, -80.095457848294], [161.65454415837, -80.095048397397], [161.97194589905, -80.094638946499], [162.48934763972, -80.094229495602], [162.8067493804, -80.093820044705], [163.12415112107, -80.093410593808], [163.44155286174, -80.093001142911], [163.75895460242, -80.092591692014], [164.08528399709, -80.0955318347], [164.41161339176, -80.098471977387], [164.58121015884, -80.1], [164.90120823856, -80.1], [165.22120631828, -80.1], [165.541204398, -80.1], [165.86120247772, -80.1], [166.18120055744, -80.1], [166.50119863716, -80.1], [166.82119671688, -80.1], [167.1411947966, -80.1], [167.46119287632, -80.1], [167.78119095604, -80.1], [168.10118903576, -80.1], [168.42118711547, -80.1], [168.74118519519, -80.1], [169.06118327491, -80.1],
                ],
            ],
        ];
    }
}
