<?php

class WeixinPay
{
    protected $appid;
    protected $mch_id;
    protected $key;
    protected $openid;
    protected $out_trade_no;
    protected $body;
    protected $total_fee;

    function __construct($appid, $openid, $mch_id, $key, $out_trade_no, $body, $total_fee)
    {
        goto Mc4_E;
        f6DEv:
        $this->out_trade_no = $out_trade_no;
        goto kWvX3;
        Mc4_E:
        $this->appid = $appid;
        goto yY0Kz;
        yY0Kz:
        $this->openid = $openid;
        goto cDMIp;
        kWvX3:
        $this->body = $body;
        goto fxbFo;
        NJ0O2:
        $this->key = $key;
        goto f6DEv;
        fxbFo:
        $this->total_fee = $total_fee;
        goto jtv8R;
        cDMIp:
        $this->mch_id = $mch_id;
        goto NJ0O2;
        jtv8R:
    }

    public function pay()
    {
        $return = $this->weixinapp();
        return $return;
    }

    private function unifiedorder()
    {
        goto hs6af;
        U5YO2:
        $xmlData = $this->arrayToXml($parameters);
        goto kvN_S;
        khnfB:
        $parameters["\163\151\x67\156"] = $this->getSign($parameters);
        goto U5YO2;
        BS7u9:
        $parameters = array("\141\160\160\151\x64" => $this->appid, "\x6d\143\x68\137\x69\x64" => $this->mch_id, "\156\157\x6e\143\x65\137\x73\164\x72" => $this->createNoncestr(), "\142\157\x64\171" => $this->body, "\x6f\x75\x74\137\x74\162\141\144\145\137\156\x6f" => $this->out_trade_no, "\164\157\x74\x61\154\137\146\145\x65" => $this->total_fee, "\x73\160\142\x69\x6c\154\x5f\x63\x72\145\x61\x74\x65\137\151\160" => "\61\x39\x32\56\61\66\x38\x2e\60\x2e\61\66\61", "\x6e\x6f\164\151\146\x79\x5f\165\162\x6c" => "\x68\x74\x74\160\72\x2f\57\167\167\x77\x2e\167\x65\x69\x78\151\x6e\x2e\x71\161\x2e\143\157\155\x2f\x77\170\160\x61\171\x2f\160\141\171\56\160\x68\160", "\x6f\160\x65\x6e\151\144" => $this->openid, "\x74\x72\x61\x64\145\x5f\164\171\x70\x65" => "\112\x53\x41\x50\111");
        goto khnfB;
        hs6af:
        $url = "\150\164\x74\160\x73\72\57\x2f\141\160\151\x2e\x6d\x63\150\56\167\x65\151\170\x69\156\x2e\161\x71\x2e\x63\x6f\155\57\160\x61\171\57\x75\x6e\151\x66\151\x65\x64\157\162\x64\145\162";
        goto BS7u9;
        kvN_S:
        $return = $this->xmlToArray($this->postXmlCurl($xmlData, $url, 60));
        goto X3ros;
        X3ros:
        return $return;
        goto Eda9F;
        Eda9F:
    }

    private static function postXmlCurl($xml, $url, $second = 30)
    {
        goto x4TbY;
        nYysI:
        goto n_TS0;
        goto zoThs;
        JoKum:
        curl_setopt($ch, CURLOPT_TIMEOUT, 40);
        goto ggJTv;
        nlzfp:
        curl_close($ch);
        goto Q4EuZ;
        ggJTv:
        set_time_limit(0);
        goto eq3AD;
        ZqYUF:
        curl_setopt($ch, CURLOPT_TIMEOUT, $second);
        goto FxwZd;
        eq3AD:
        $data = curl_exec($ch);
        goto FYThm;
        He1mQ:
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        goto r2ADB;
        Wro_b:
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
        goto JoKum;
        Q4EuZ:
        return $data;
        goto Tvbvm;
        Tvbvm: n_TS0:
        goto vTiwK;
        b6GM1:
        curl_close($ch);
        goto xv0Ll;
        r2ADB:
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        goto HYKu3;
        x4TbY:
        $ch = curl_init();
        goto ZqYUF;
        FxwZd:
        curl_setopt($ch, CURLOPT_URL, $url);
        goto AkH7I;
        JXhF0:
        $error = curl_errno($ch);
        goto b6GM1;
        xv0Ll:
        throw new WxPayException("\143\x75\162\x6c\345\x87\xba\351\224\x99\xef\xbc\x8c\351\224\231\350\257\xaf\xe7\240\x81\72{$error}");
        goto nYysI;
        AkH7I:
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        goto He1mQ;
        FYThm:
        if ($data) {
            goto l2ChJ;
        }
        goto JXhF0;
        zoThs: l2ChJ:
        goto nlzfp;
        WgtC3:
        curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
        goto Wro_b;
        Nf9_z:
        curl_setopt($ch, CURLOPT_POST, TRUE);
        goto WgtC3;
        HYKu3:
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        goto Nf9_z;
        vTiwK:
    }

    private function arrayToXml($arr)
    {
        goto Sweh4;
        pF2iB:
        return $xml;
        goto ZMdxO;
        Sweh4:
        $xml = "\74\162\157\x6f\x74\76";
        goto MSrKQ;
        MSrKQ:
        foreach ($arr as $key => $val) {
            goto ony70;
            lJSDx: HGQPP:
            goto SZ6Fj;
            Z9ABG:
            $xml .= "\74" . $key . "\76" . arrayToXml($val) . "\x3c\57" . $key . "\76";
            goto xCYso;
            xCYso: bHRz3:
            goto lJSDx;
            nVRR8: ywEI5:
            goto Z9ABG;
            S8Ytx:
            goto bHRz3;
            goto nVRR8;
            ony70:
            if (is_array($val)) {
                goto ywEI5;
            }
            goto lbwGf;
            lbwGf:
            $xml .= "\74" . $key . "\x3e" . $val . "\74\57" . $key . "\76";
            goto S8Ytx;
            SZ6Fj:
        }
        goto gIA4O;
        gIA4O: xLdfx:
        goto wjkUJ;
        wjkUJ:
        $xml .= "\x3c\57\162\157\157\164\x3e";
        goto pF2iB;
        ZMdxO:
    }

    private function xmlToArray($xml)
    {
        goto H0sx2;
        adbiP:
        return $val;
        goto Y3II8;
        Tdrw8:
        $xmlstring = simplexml_load_string($xml, "\123\151\155\160\x6c\x65\x58\x4d\114\x45\x6c\145\x6d\x65\156\x74", LIBXML_NOCDATA);
        goto ejplQ;
        ejplQ:
        $val = json_decode(json_encode($xmlstring), true);
        goto adbiP;
        H0sx2:
        libxml_disable_entity_loader(true);
        goto Tdrw8;
        Y3II8:
    }

    private function weixinapp()
    {
        goto pz1Qj;
        rYJT3:
        $parameters = array("\x61\160\160\111\144" => $this->appid, "\164\x69\x6d\145\x53\x74\141\155\x70" => '' . time() . '', "\x6e\157\x6e\x63\145\123\164\162" => $this->createNoncestr(), "\160\141\x63\153\141\147\145" => "\160\162\145\160\141\171\137\151\144\75" . $unifiedorder["\160\162\x65\160\141\x79\137\151\x64"], "\x73\151\147\156\x54\171\160\145" => "\115\104\65");
        goto PDmRX;
        COZ2n:
        return $parameters;
        goto Q5sYq;
        pz1Qj:
        $unifiedorder = $this->unifiedorder();
        goto rYJT3;
        PDmRX:
        $parameters["\160\x61\x79\x53\x69\x67\156"] = $this->getSign($parameters);
        goto COZ2n;
        Q5sYq:
    }

    private function createNoncestr($length = 32)
    {
        goto Ibbb3;
        D25ru:
        if (!($i < $length)) {
            goto rvN95;
        }
        goto l209x;
        l209x:
        $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
        goto U0qQo;
        EI0uI:
        $i++;
        goto fOYII;
        jfhDi:
        return $str;
        goto nDgU7;
        y4YZB: DX12H:
        goto D25ru;
        U0qQo: n4MuE:
        goto EI0uI;
        Em6on:
        $str = '';
        goto Z1ULy;
        Ibbb3:
        $chars = "\x61\x62\143\x64\145\146\147\150\x69\152\153\x6c\x6d\x6e\157\160\x71\162\x73\x74\165\x76\x77\170\171\172\60\x31\x32\63\x34\65\66\x37\x38\x39";
        goto Em6on;
        Z1ULy:
        $i = 0;
        goto y4YZB;
        Gdv7B: rvN95:
        goto jfhDi;
        fOYII:
        goto DX12H;
        goto Gdv7B;
        nDgU7:
    }

    private function getSign($Obj)
    {
        goto r_w7Y;
        ZJ0R4:
        return $result_;
        goto Kz2Da;
        KKXuX:
        $String = $String . "\x26\x6b\145\171\x3d" . $this->key;
        goto RHHmp;
        r_w7Y:
        foreach ($Obj as $k => $v) {
            $Parameters[$k] = $v;
            xmosl:
        }
        goto lKWWE;
        ovORB:
        ksort($Parameters);
        goto Zz6xa;
        RHHmp:
        $String = md5($String);
        goto k098K;
        k098K:
        $result_ = strtoupper($String);
        goto ZJ0R4;
        lKWWE: XIb3Y:
        goto ovORB;
        Zz6xa:
        $String = $this->formatBizQueryParaMap($Parameters, false);
        goto KKXuX;
        Kz2Da:
    }

    private function formatBizQueryParaMap($paraMap, $urlencode)
    {
        goto QAHJs;
        uzLDC:
        if (!(strlen($buff) > 0)) {
            goto ipvRK;
        }
        goto Qy6cg;
        Qy6cg:
        $reqPar = substr($buff, 0, strlen($buff) - 1);
        goto b3QtZ;
        C7wIe: UEXUe:
        goto K63Kn;
        QAHJs:
        $buff = '';
        goto P21Ni;
        oUGDo:
        return $reqPar;
        goto zzKj6;
        b3QtZ: ipvRK:
        goto oUGDo;
        dgmYK:
        foreach ($paraMap as $k => $v) {
            goto FtpL4;
            FtpL4:
            if (!$urlencode) {
                goto IQsmn;
            }
            goto sb27s;
            ZVNEx:
            $buff .= $k . "\75" . $v . "\46";
            goto xLeT0;
            sb27s:
            $v = urlencode($v);
            goto LEkaB;
            LEkaB: IQsmn:
            goto ZVNEx;
            xLeT0: NKv1n:
            goto M_W72;
            M_W72:
        }
        goto C7wIe;
        K63Kn:
        $reqPar;
        goto uzLDC;
        P21Ni:
        ksort($paraMap);
        goto dgmYK;
        zzKj6:
    }
}