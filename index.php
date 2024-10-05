<?php

$url = "https://www.ugphone.com/api/apiv1/info/advertisementRecord";

$headers = [
    "accept: application/json, text/plain, */*",
    "accept-encoding: gzip, deflate, br, zstd",
    "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",
    "access-token: 665b6227ee6358c348b6158e1e96d55f20240912143738",
    "cache-control: no-cache",
    "content-length: 10",
    "content-type: application/json;charset=UTF-8",
    "cookie: g_state={\"i_l\":0}; _gcl_au=1.1.1093537125.1723110357; _ga=GA1.1.1406309889.1723110363; _ga_2KP3PGN1TJ=GS1.1.1723889896.5.0.1723889896.0.0.2065176658; cf_clearance=EJ_0Oh8D3BaOna7knen7vRypiONs4z94_296CvRJZc0-1726123031-1.2.1.1-Hnepi6_zWvoJqIWsxOqZZtbO31LcgCnuSCQOr4CNEouE9FkHnoMfNjbd.gu5.KUo5FjgCw2.LdlEgrhsZCx3K2c6CkPzBRUj0qt6YnZHGcjA7n4Lr1nShDzBc2.U_7WRUeNlLXeMTxFGmHAdCFMP42PKGnJ9J7DpASqGjTydVyqvAekGog01hH4BSerOKFI01k.eUfvoA5n.yVN9clwZ9q0.GcaSK64wgZUVcfqE.fRqh09PUMNhyEbXtDFe74d_wdaUVeZ6MSyZVMDfqJ2LgDnPBmXq32r2CXxzK92tLtHRGlKhNczZ_H4Vgi7Lw2V3N15WLlS7chi.vIhhvrOG.2JZIOX5Y1mh_Y0UilTnsW6P1qqmGzj7LZhqzGS8ixOLWn2Utu9jg9JGhZTfaELM37743y3Yfca5dUXWCo5BXZdMfdQAt7Lt1QX8JXvH1jz9",
    "lang: vi",
    "login-id: 758c3b11-c896-7c26-2cff-8edb59e07202",
    "origin: https://www.ugphone.com",
    "pragma: no-cache",
    "priority: u=1, i",
    "referer: https://www.ugphone.com/toc-portal/",
    "sec-fetch-dest: empty",
    "sec-fetch-mode: cors",
    "sec-fetch-site: same-origin",
    "terminal: web",
    "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36"
];

$data = [
    "auth" => "7a9157cf51dfab2ff61bfc0dc54d8677",
    "ad_callback" => [
        "placement_type" => 1.0,
        "country" => "VN",
        "adunit_format" => "RewardedVideo",
        "precision" => "exact",
        "network_firm_id" => 2.0,
        "publisher_revenue" => 0.0010107,
        "adsource_price" => 1.0107,
        "ecpm_level" => 0.0,
        "currency" => "USD",
        "id" => "b2050d8bca0d482dcfe8fe150b4e1fe3_300008183_1727959980618",
        "ad_source_type" => 1.0,
        "segment_id" => 0.0,
        "adsource_id" => "300008183",
        "ad_source_custom_ext" => "",
        "bid_floor" => 0.0,
        "network_name" => "Admob",
        "scenario_reward_number" => 1.0,
        "adsource_index" => 0.0,
        "scenario_reward_name" => "reward_item",
        "network_placement_id" => "ca-app-pub-2517323400145638/4690991147",
        "adsource_isheaderbidding" => 1.0,
        "url_tag_params" => "{}",
        "reward_custom_data" => "",
        "user_load_extra_data" => [
            "auth_key" => "4526144d-6ea9-74d5-070b-1e3fda19fe4d"
        ],
        "adunit_id" => "b662a3621de3fd",
        "network_type" => "Network",
        "abtest_id" => 3.00000477E8,
        "show_custom_ext" => ""
    ]
];

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_HTTPHEADER => $headers,
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #: " . $err;
} else {
    if ($response) {
        $responseData = json_decode($response, true);
        if ($responseData) {
            echo "<pre>";
            print_r($responseData);
            echo "</pre>";
        } else {
            echo "Error decoding JSON response: " . json_last_error_msg();
        }
    } else {
        echo "No response received from the server.";
    }
}

?>
