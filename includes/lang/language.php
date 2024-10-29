<?php

class Languages {

    public function getLanguages() {
        $languages = array(
            'Afrikaans'                    => 'af_ZA',
            'Akan'                         => 'ak_GH',
            'Amharic'                      => 'am_ET',
            'Arabic'                       => 'ar_AR',
            'Assamese'                     => 'as_IN',
            'Aymara'                       => 'ay_BO',
            'Azerbaijani'                  => 'az_AZ',
            'Belarusian'                   => 'be_BY',
            'Bulgarian'                    => 'bg_BG',
            'Bengali'                      => 'bn_IN',
            'Breton'                       => 'br_FR',
            'Bosnian'                      => 'bs_BA',
            'Catalan'                      => 'ca_ES',
            'SoraniKurdish'                => 'cb_IQ',
            'Cherokee'                     => 'ck_US',
            'Corsican'                     => 'co_FR',
            'Czech'                        => 'cs_CZ',
            'Cebuano'                      => 'cx_PH',
            'Welsh'                        => 'cy_GB',
            'Danish'                       => 'da_DK',
            'German'                       => 'de_DE',
            'Greek'                        => 'el_GR',
            'English(UK)'                  => 'en_GB',
            'English(India)'               => 'en_IN',
            'English(Pirate)'              => 'en_PI',
            'English(UpsideDown)'          => 'en_UD',
            'English(US)'                  => 'en_US',
            'Esperanto'                    => 'eo_EO',
            'Spanish(Chile)'               => 'es_CL',
            'Spanish(Colombia)'            => 'es_CO',
            'Spanish(Spain)'               => 'es_ES',
            'Spanish'                      => 'es_LA',
            'Spanish(Mexico)'              => 'es_MX',
            'Spanish(Venezuela)'           => 'es_VE',
            'Estonian'                     => 'et_EE',
            'Basque'                       => 'eu_ES',
            'Persian'                      => 'fa_IR',
            'LeetSpeak'                    => 'fb_LT',
            'Fulah'                        => 'ff_NG',
            'Finnish'                      => 'fi_FI',
            'Faroese'                      => 'fo_FO',
            'French(Canada)'               => 'fr_CA',
            'French(France)'               => 'fr_FR',
            'Frisian'                      => 'fy_NL',
            'Irish'                        => 'ga_IE',
            'Galician'                     => 'gl_ES',
            'Guarani'                      => 'gn_PY',
            'Gujarati'                     => 'gu_IN',
            'ClassicalGreek'               => 'gx_GR',
            'Hausa'                        => 'ha_NG',
            'Hebrew'                       => 'he_IL',
            'Hindi'                        => 'hi_IN',
            'Croatian'                     => 'hr_HR',
            'HaitianCreole'                => 'ht_HT',
            'Hungarian'                    => 'hu_HU',
            'Armenian'                     => 'hy_AM',
            'Indonesian'                   => 'id_ID',
            'Igbo'                         => 'ig_NG',
            'Icelandic'                    => 'is_IS',
            'Italian'                      => 'it_IT',
            'Japanese'                     => 'ja_JP',
            'Japanese(Kansai)'             => 'ja_KS',
            'Javanese'                     => 'jv_ID',
            'Georgian'                     => 'ka_GE',
            'Kazakh'                       => 'kk_KZ',
            'Khmer'                        => 'km_KH',
            'Kannada'                      => 'kn_IN',
            'Korean'                       => 'ko_KR',
            'Kurdish(Kurmanji)'            => 'ku_TR',
            'Kyrgyz'                       => 'ky_KG',
            'Latin'                        => 'la_VA',
            'Ganda'                        => 'lg_UG',
            'Limburgish'                   => 'li_NL',
            'Lingala'                      => 'ln_CD',
            'Lao'                          => 'lo_LA',
            'Lithuanian'                   => 'lt_LT',
            'Latvian'                      => 'lv_LV',
            'Malagasy'                     => 'mg_MG',
            'Maori'                        => 'mi_NZ',
            'Macedonian'                   => 'mk_MK',
            'Malayalam'                    => 'ml_IN',
            'Mongolian'                    => 'mn_MN',
            'Marathi'                      => 'mr_IN',
            'Malay'                        => 'ms_MY',
            'Maltese'                      => 'mt_MT',
            'Burmese'                      => 'my_MM',
            'Norwegian(bokmal)'            => 'nb_NO',
            'Ndebele'                      => 'nd_ZW',
            'Nepali'                       => 'ne_NP',
            'Dutch(Belgie)'                => 'nl_BE',
            'Dutch'                        => 'nl_NL',
            'Norwegian(nynorsk)'           => 'nn_NO',
            'Chewa'                        => 'ny_MW',
            'Oriya'                        => 'or_IN',
            'Punjabi'                      => 'pa_IN',
            'Polish'                       => 'pl_PL',
            'Pashto'                       => 'ps_AF',
            'Portuguese(Brazil)'           => 'pt_BR',
            'Portuguese(Portugal)'         => 'pt_PT',
            'Quiche'                       => 'qc_GT',
            'Quechua'                      => 'qu_PE',
            'Romansh'                      => 'rm_CH',
            'Romanian'                     => 'ro_RO',
            'Russian'                      => 'ru_RU',
            'Kinyarwanda'                  => 'rw_RW',
            'Sanskrit'                     => 'sa_IN',
            'Sardinian'                    => 'sc_IT',
            'NorthernSami'                 => 'se_NO',
            'Sinhala'                      => 'si_LK',
            'Slovak'                       => 'sk_SK',
            'Slovenian'                    => 'sl_SI',
            'Shona'                        => 'sn_ZW',
            'Somali'                       => 'so_SO',
            'Albanian'                     => 'sq_AL',
            'Serbian'                      => 'sr_RS',
            'Swedish'                      => 'sv_SE',
            'Swahili'                      => 'sw_KE',
            'Syriac'                       => 'sy_SY',
            'Silesian'                     => 'sz_PL',
            'Tamil'                        => 'ta_IN',
            'Telugu'                       => 'te_IN',
            'Tajik'                        => 'tg_TJ',
            'Thai'                         => 'th_TH',
            'Turkmen'                      => 'tk_TM',
            'Filipino'                     => 'tl_PH',
            'Klingon'                      => 'tl_ST',
            'Turkish'                      => 'tr_TR',
            'Tatar'                        => 'tt_RU',
            'Tamazight'                    => 'tz_MA',
            'Ukrainian'                    => 'uk_UA',
            'Urdu'                         => 'ur_PK',
            'Uzbek'                        => 'uz_UZ',
            'Vietnamese'                   => 'vi_VN',
            'Wolof'                        => 'wo_SN',
            'Xhosa'                        => 'xh_ZA',
            'Yiddish'                      => 'yi_DE',
            'Yoruba'                       => 'yo_NG',
            'SimplifiedChinese(China)'     => 'zh_CN',
            'TraditionalChinese(HongKong)' => 'zh_HK',
            'TraditionalChinese(Taiwan)'   => 'zh_TW',
            'Zulu'                         => 'zu_ZA',
            'Zazaki'                       => 'zz_TR'
        );
        
        return $languages;
    }

}