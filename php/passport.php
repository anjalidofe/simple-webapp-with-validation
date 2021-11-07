<?php
    include("db_connect.php");
    class passport extends MySqlDb{
        public function insertData(){
            $mis = $_GET["mis"];
            $name = $_GET["pno"];
            $pass = $_GET["pname"];
            $expiry = $_GET["expiry"];
            $visa = $_GET["val"];
            $sql = NULL;
            if ($visa == "yes"){
                $sql = "insert into passport values (\"{$mis}\", \"{$name}\", \"{$pass}\", \"{$expiry}\", TRUE);";
            }
            else{
                $sql = "insert into passport values (\"{$mis}\", \"{$name}\", \"{$pass}\", \"{$expiry}\", False);";
            }       
            $this->connect()->query($sql);
        }
    }
    $p = new passport;
    $p->insertData();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Student Medical Information</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="../js/med.js"></script>
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 38px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px  #669999; 
      }
      .banner {
      position: relative;
      height: 300px;
      background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPoAAADJCAMAAAA93N8MAAACjlBMVEX///8Rdq7/5c47rOb7+/sAaKf///7///35+fmzakf8/////f/2/vz/04D/59D3/v4Acaz/QH7/7NT/5cv/5M8Abar/2n7/1X46ren/PIBCs+v/68/8QX7///ixa0j/7dfn5eTy8PGyrq7EwcHf29rb2Nj/3X7/8Nb/69jJxcD/PYWroJr21H+5akHN0M3/14gstXOxakvj39r28OuYkI6YADfuL3E7q+0/p9e6t7OBc3A/Q0asqKi9u7qOhn8/AAC6nFyQVTbp1L6znInWxbMOAABsWExdRzssAAChmZHBsqQiAABwYV6JfXwPd6mkmJpgGACNQhe4rIzXrVxVKAulVyuhcl2PdWWopZOSgGiQeXV2RjPTu3fox4TpxHSIg4iwjX+hlHSnWDOMWUDVAFOJPlOQY27Kxc+1m3YHbDKxmpJcMR62YDBzEi67lZ+4eIlpCxe/pnKmsqYAbyIjk1+yclrIlHbGZYFOmGl2kXgAnUenURieeoSaWWqsQVzJIFjizZTIQW0Re0UAvWeFkITcJm91tYvOj26CXFOzR2i+qmo8rXKue2i4y8G1H1fbtsK9ADxpbWw3aIeEp5JNbk3KXH1+ssaSdUCgya1HTDdLi6Fjdos3Wm8AjkpemHWMYkerj0IdiKwXQ1RqhpBYREo8l686dYI5UTBCksMJW2xwUyuzydYAfJpRkGpwoLjat1ltdGXJjZ+GoqDCAEdsr9A/KB07MzGF0fU3RF/lU4F/Qkh7PSZqqMxtYEFTWFpVPyRro6pOMwg+Gw4NJDG3V4oxHyQ9MyL2e6LIibk/ks9YISg4P1OnN0UxWmCFjbt2Sk/kdZV2CyPD4OfoqLsXLkaIxdjsy9XE4eYAVqqMsth67+bZAAAgAElEQVR4nO19C2MT15XwBQnNeCRLfuth2Z6RNLZl2WMsKdJIkRRbVqRI0SMQGgdjDDGbQk0KC5sNSZNC3IbdhBbYuBuzS6AbJYFPiahbWEji2iTfZpt2aTZpl27C8m++c0fvt2STZnc/Dvg1mrn3nnvOPa977hkkkykUsnv4DZWCuMy1+3Af7sN9uA/34T7ch/twH+7DfbgP9+E+rB++WV/7v3PrYnFDzxMEgSTfWOsNgpjc0NPihkfXQxnoBlpvdET1AzTO7F/foyTZ+Ng8j+kRs+0xqva4cOvkN4U5bh0Gj7Y/rl/f44xYaKI+MO7ww/e93+EQemIKOL/24GBaN8SRVYAkpSYPI0bm7SR6cifd8POYKHVSBe6bHtuGuzAhgnQjNL2r1nTX37q48VVHidmZ3TpYfHpEzw7vaejZbJd13YiQFHF790qB1C6W1pOIefEZfx2tl1zU08LAi1vP+1EXgKhlth8hEcXGGLT9KRpR0gaexmMjC7qj2Uo3IqkYSSiiJ4SCq3Nzc/t8iH3iMV1jrae6+IunEfvdQn4RZ6jeAO4S05NSitF5fzk8PLNzP2IOGOt/FgMWctk/GMR876/cZe+DQUmp+SmGIsiDcxO7xnpHnnmipnAppfn090FKHDKgw+q/zCe7OKUAG8KdEh+ZMSDLTNeoslnZNW40/tJT76OZ0eV+P/pXnPTZixihUtbBqKOpv3ZY0PRzTft6J5qaep/Zi6Q9PdVbLxot+md1DGQl8OgxHSroAyOd+l//2GnGqJtpHj5wqhnjztGNrJbCdS7hnqcRA1zDvFDK9cKwLDTFWieeGxsbaxrbN9EEcp4iucqtl9Fq7FWWoq/RyFHm9izx6xu7sJR8SuXuI8PK0fHmrjJNVoG8sVFYbDB6RALW7A+CqNhag1FJxFJCjOabnmsaaRqbG9s11rQX0T99sYh8+WMrQuOlH0IvnuMnbCeOx5BU4WAK28+Qvi4QkwTtodH2rtGu2WHlqZdPKbcj8fad0lrqNv10wRQHAxaEdMEXXgjSDgOFmCJ7BQ9KQsAM7f3r55rGmnqb4FvThJ4N7TCUR72MbD+24EYxm1qrVQ+d9KCv/+KlgtbTNK9bFfbo+re73xo/BUt9dObIaNcpnan/8UpCuuTxPFuD+dGPdcj1o61btz570Qp/Xnyl6Gb4Lwn6DeiJ5/4apFyTABMpm6acOV9eZZJWm/bkSbV24fhJD6cz57WeFvBkfahjjiIIPYEOHJiZUY7OAvrNQHWns6aRlRobWaB4jv6NI/Ysxvz557ceNep+Xqy2QLPR+/520vjq347hdT7WC+jvQz1keWu2nIXIOml0TKtdOa7WnlxYeA3lq/aMeK/M71S+Qsi2HuyaHR09cuqUsrmLRdVFbg5KZRCJab71Jz/ZuvWiucwDYko6/VMj0s1hKdc7sau3aSTseGLCUK7xsnb7d9XHTi+0AsXVarVWfZKjvz6WW+3C/XWv8+yNuvGu5uaZmeHmriNimqn2UPbhYmODtDJIj0m+VYDT6PQLdAkjUwSNCGrfCNC7d2K1aWQb4xiZc5Vrviz1dGfOKk5oAYDhtVqbgzv0d5XVQwakBP26B7jYvcimVG526AQTDrlowH10tH+0/xRjGj5Sj7NQPDRK94OfGT2A+t8D2X/0k60/0//kx5Hy62a/a+IZYamPbAN9EAiUTnVFy1iB0ButrccX1MD0WhssFbqOoaJXVFfAylrig4ggClrXzfYDd+556vHh2VM7GeSYPVcH2UsHJzkqRUcBbYHjn936D8j0j+YyqMum9xoRMzU3MtI09096l7FsX5WdAgrpsIiDrxXtG6cNh2pSyeAikZ4/D7qH1VPkmxfYvNYJZuckhfbTcJObJB1I6qpHvJcbm1Gq35ri+J9ghi8PzGNzMphu2hGahn7mX4yVbb2M3Y6HKvEc5tzH1DZba6tabaOZE2pr9WFS6M1bYFvS2L4EqcuqeGdR6+RTIfjuAOJvf7mulV4OrBd/vv9vAPWfCPqtogtk5JDjn+bxLwQiOD9d9qbyNJcwD6jPItkPbeohtfrkfoQi36+51PVLYKOZndZXTIAit3zBWNQ6+9Z2hGJdszTa+Vb5sdQBwYvPIxrojfXbRYeLMVQMwXz6zBz04ghReD00EKGToNhhMJRo1+HXjh1yIUqByuUiFQAsCNZhjfMaO3/Fw7lRT4lvQcMtrrfOkT3SDcRD9uN+frH1x1u3/ggY7PmLFfiHQK4d03DnthHTurqJnWCQUUaJdSSqGd8Kv61DxDsqu0olEmn4dyveZ9hgGAgGwuhAflv17GkQl69U4vkUndnHymq1Wn1QlO447bAtKNDCmZqo01H7co9Oo+IvJVQi+BETAonlgKjPcq8M//gDkG7caXT0x7+ofTNX3q2vB3RnjpMoVlZCFsKeNS6UUKniossqEX8+sUgw8LXubqvB//nBz+DbRTL2vV/VZsaNAEdjj0eqqHljD+KA10WLCZHokuaCaNqYeLsB4dIAMHoQnixIXboOzAmi8iAkhLSa/MMfKaRUrT6AvpQkaQfUNfDPHteIjKjnmyH6PYN7QxiCMpoIpAf5djlhV9l5IH+dHum3BoA4PWUV+GZjc2B5m1/WxXhVnD+vUvGLMAfzRhzg+e8L4Dma+t+iCemBIGpoZ64ICHrRnkTovCaxyNv5+KLKvoQs1+yNR9v/fECxyPzydkSQMzsR5VjnbpgArK6HQkYQ8Tyv4e2ihIVAtPO/M9PrH3cIFjdygOnaf66WxKRw+Jd0lLEipNhLRmJ/XKPS2EUqno7R3DeqeDYM5pcBdb0uaNoDJHPUdsgRy1DcRfb098pF9Zn3ziPjm3GejydJcF8SjUVd//xA6/TnZodnhk/pgDvdNTiUMlz8e8wlpy/qyggGejEOZoCZNQMLIUc0XmOz59uE1OB14/3K8VO7u3abkbm/VvyA+dlRxMRQedcf0Yzs9TiH9zcRITWtz234MwHp9yDyXJeyeWb36Khy1u2Yeb8q6qdfgJl64dlnf+GB38swCCyaK/Z3kGQ5KQiNe7vWKTCRanqPJc+APVZ2GLrZUb17Vqns6lKOnhpWelH1WCHB/Y17/0UhHPgC8+wrqFxIP3KBRYYrcaZHIrnHqLOAe2Obs4A6g/RnqMNlBBPz1BHao1QemRkenZk50P9yrZZohJ7FoaFnn3/WVWEXBwNhclf5dB1ASBjEXmGW36k3gJ2BQ3/HUHrFQqnzJZjYoa7dwztHm4dnZ5QzNRpi/+pn3Natz/4CR8V+LrWcroAejopI7inq6Np7DNqPlhpEXcHQh2h9DPwvhaJoPIKYc/QrZ3Z3Dfc3NyuP7Kd91fQb84t/4Lamo//PG49+b93xtUaB4JYt7JN0Hbq3AHRnFPoTNtuJGHqjmOUJ8tx2nX5316hyfOaIsrkrJDb+8qkqTYHfKgWGfxYT/h/KrvRvAqQSnQuZL/N8Yk8Pd76uvao0UFL3SduKduFMbD9d/Bk5PoM5flQ5fGpcqRxnMtkjlZpiWPKFHz8vbHycPnqR+2bjBNleKTZpvKTiVfylN40NhVweOHRIvfLakM12TMEWbTtJwHshGfd2ZXPzaFfX+B6jscZa+tUPHOiF9IbP0R/9mYw1Sqoj9eAMavhLCQva3wDVD5+9qtYC1VdW6KuHSj4l/L/0IeOR2V+e2smKZ/qD1flJ/3MGMdYXfvEzFxCclnwzMZgSYBPXlu08jyN+On3U0tCj6oXXtAu2Ywxd+pn4XFcIbxvQjIOhbr5Vm5DMxdPiowgdLdPWNwRgJxFJza1L9ksJFdNQ0pbuGHdYrR0aOskc/ucyIpl1kXAPfB15nCHpOoSIg/T82CH90dEGhrBBUEh6WP4SMLzoeiiR8wswz9F6U8SJIRJzc0wqfSAXbtMtkIqXFhaOcYgpoxyEu53DPoRck1JUO6ESE4F+hSnaXJAiKp/7awXyJGCj0KZ6DV0C7UmwepHdLrrEUG/mtBTpCN8IBx0sazYbWNZosoYDYY+DLhzroaukDp39umLjN4erqbQakNsQJJkU1OZJN4NCE7K928ru9hcDhXTLqCemeydplFBZ4tDOQLDkcYtZ5wxHshSWSimajv0FoyuVcRlgYhswTqRiRBp0Vr//XX847PQA/4WdziBXbYvF8eI0WClocoKtOyR2bdmyxNDnM+MknYEiFlZkmc0cC1vpFEmEpJe65rdREMjLBgOBsMloyZe8DO3wRCqrYGZST7EuJPBunbhbLI6o3nItrXyNN0pSLc2uV3Ki1+wJ00K+b/ld5I0DSSLGdGNaV55lCM7jKis5PFPwNfGdudUgmFN0uTvKgFSK8NxKBYZ3RorTJJnvnmhVq89ExALh4RvpMZFUI5nUDYIhHHBg7AQMKVbPKfBuBf5DIsHLkrHmiJNr3RfSz480jfU2zXm4ffWFM8RizBzpFuhACcllx4fUrU/Dtx/m9ojMTrbe1La87/UAhdebITf5LpxbeCamKBTbhiCZGnruO9JTzETTBPzfNVenP5JetanRGf2lXAbaW2s7GlZr1VmBBmxiqh4go4S1JgW5TNMMQyJSLBUgjV6lpQg01d8AgZvdNH3p5NDCGa269XBBTESBCJw3Is4kluCxu16cnx/pBdQBJhnfZD2Yi/MSscOlApQ+qVarbdzTWrV6IeOd4qQwfdXtZdDIxunfP/j6no8///zjBz8IOz/44EEB3nU6ZJX3gwkUC4BlJc7S3Nba+vRRnHtSokf0WJrlDZ2eMjtGegEmxkbmadO+2qhnctXEabFa8rFb/cbZq6+ZH8ATQGcewZ0ZquKu++Ayr9F8+CH/IQb+w+siDU4OUIn4+EfOyjrP6cFaLbM+qDPq1taF0ycA9ZMlRKF1OYZPPUDPNe2b6N03MRKqiTTKpKWmmAY/7yxZlWfVr8WOcgqO06+oWSrXkwSxldQMrNfA25cSi4trH6o0H2pE8KX5UIQRV6l4kUrDv22sYHJ5rEhK5JDkgN6tZ+gHTiysqEstJ9KRSagVpoDl2CdGgOF7m3rNe4UDKnWgLqCdQogtIeV+dava9mvHAz88tGITqJXLgTRWiq5bfstreD7BC0RXYdz5D0V5oIqXl8CuCCpILdWrF87qDRKOlh1Wny25GxvQmfx5gMdeNMhwQtvIHI3md9WJenq9iDEpnMV3yGytWvWrQRsw/Iqw1rOYS5CrnG0F3voHvIgHCmNyA86pbyJVHu6auKOMoOP8RSlnnHrh0Hd/bXz6hM1WBnU9QYmzqdRAiPkepHfMTzkwM9aRV5NNyE3dTCFDiX95Va3W/sqpHtIKvRdmArrKiGoC+fk0mrDWRdfhC6ivEdkL6V6agGsJEEXGguzE0NCQ7ejTQ6Bj6OLbaTYr5bJs+CJtnkfM3pJ7K+Be9HhxAh8lO6ZWf/84YH4YlZzgYcot91BUo0lhDjhrhBko5Hd8SfVm8WM9INuLEoSoQyDmbEe/C50fK5ENLpQ5wJEZEiHRo1df5JjHjPWZsRmbI4MRXRJXp66eAOl+IgY8UZL96S6THPtgjrVT8v1DXqQpwhy+HFThAMFSkBYn7VJvAMv9/tda9Rm6uBsjnTsalvcU3dCGXBE6JYKOQoxep5eVJs+DgitjN5lu5fG1CO+K8ypRKeaqRNGeBxGhqWL9QikOn2wFnn+6JLGHcKWHfi8diXLoYFCUHgMEDiliLRjggxpVHurCH6pSzIEjChIOoGnCWUY4UbTuaoyjKCmVj7wE6RqKpdU3QYpX96Yj4bQ+ZvU4nRFrzMFivpYWu2p0aciNQsaoxi6qCmnmVy0VDo6kLOGqvmYekxDSc+F6kMlAfU5mGOtFQMs1H/K29QUnQFF+Z2J1x0FnYYwGgCkTbJSiaU0xe5fHHHN8weDAMaQrJEnTBo7jzPl0DnaNN4J7HVQnkHWuCZ/esoYG5fLNmzs6doyM9fZil2BsYp/fxeQ5HmSZ/H+g+qIGY6cqFmxp/hflXbfnr6zUWuIcuQ4Ef5J1RcI3b557//3x9/1TgbBHT6ays8ZH+8dj9e+Y1MPw3NxIU9Oq0dfWvVmANs/ECEa8dwwc4ZGJHZ4surJXx8qc4qXMcQE/TTnMRZp8zEWqZOnzjrywj1jvOTc+O9rV3zV8s3/Y39c90Dd97v0IDR95+puV/e/fw2QimM5Xe3v3BXzy7vbNaRgM9I5gqmPUAeZ2uDJ3jvSulrFoQnwBVxfjLlxXpb6L1kqHYLxpSbcvdZ17fHh0tLm5eXT3gf7RgLdd3t7e99Tw7Lk9iHscn+vqCtw71AnkmOvd5RyUb85Be4e/dySNd4rvU47tqyPgJzxUyvJH05iXxx2jrlJpVClByFuKOZby9x8QBoLc481do6MC6srZ4Rl/h0CMdjnMwuxN/zBcbu6aid2jnEzc5a6m1emBjs35qLf3zU80jWUwbwIeuAG4+2EZ9DZNlB4KeieTzloO9xTD84kEL8hCu6V4Ly62u6trO/wkJ2e7mkdHlUrlaHPX8O6d84PdaUIMPqUc7RpuxlPSPHqOvGfZssaJiXBf++Z8qkN3fd7JffiIDz7YNtILDBBgnMJcjDXtYIqn/bxdQA+cU40KDHeVym7HjoxAbA0WfhpNYvHC558vJuAvrjCHpQfd7GpWKn2IOdDV3Dw8quwant195Mh236C8fbNAdfnmjradp7q6lM0pdigfoFwPTDcF2uRCDwUgHxj0TT4BrvDYxC4cAOo92IulPoi+iWLTz5JIyXaVxg7/E9HFxTdfBwiHPwZ48MJiFAiuwSwvip/n7YVyTkK4ZmEJNw8bZzBlZ8cPTIZ83rbB7u4CSgzM35xJ4961897gLUHS1VWvgLW8AHc5yJf2tgG5z7NrdWzfwX1NI02C5APUR4oljfkWD0jbNXz0HeuTIV97R4e8DWBgoK1tsKOjw+ubn3S+vhgF2qs0vH2pgGhStBMfwAdqwjIfvxn0Ch3LO9rzV6Ac1nvH9Cfjw11KuPXxe7UPwG2b7Mt0kI955mdbn8+/Y2z1E3yQFbP/PszxRajjwznx//ukr13eBg/IC1qRY2hr6+5+efKV88Dw9qXCcwDMuLJZOQws3z/+bqgv+3A+IVKUaeuYD38yvntYOXpP9uI5qzH2atvmEigQ9/IB328nxg6mUR87OLJabPC/vuzydXfLu1MSWV5m+EDJvu62AW/o2nLRwzpg4tndwPE3IwPy9rwhZB/O/NLe1j3gCx1QKrffA8yNU20dYV97e3Z46V8LWL+jo71tMLw6tqsJr/WxkV1jhcd+CAJNAt4dm2F1FqAuL5Kcmzs2y7u7u82FeTMhWOKnhpXDn4QGoKtyjIeHkP6gvbvt5SMHDtSziVsDwrAo/X2hwRTCfV5vn7wE81T3fc7VMVjmwsn1XU1FVrc0lGUcuTwrMfMwB4Szf7QVRWqOKJuHx/t33/D1lXSa/g74dqfMLWAdn2+ww8luGHUiMLB5wN/n9aWG65maCoTkJdQSKN/eF8YH1wUtf7ApF8sDNecJhkA4pdnFOznpbcsfOYbB0HxoMIO5N2Sayt/smVH27xw9925HWoe3t28uArnc6XdOdeDm2tuelPu62zsacuDKgjQw0N7nb5OniQYiuW/eWw5zYfwBbM8Uow6uj6+vI+RLrRp5aDoU8oQKWaddPj3pC02lUGqbHPS2DeRt95AzXQcCn8wPpEncNzhY1H27fNI7MNCRIk/I2x3q3jxwD4zZsLcbUO8OCtpNLg887GsrQRyrKblAroNp227XSA51CsH0DYa6Q14B9Q5gyL6OYithoCMEjwuNBeWD4CyEcgElZnb25va+tOPUHQr4/aE8YSfHIgIGFki11wafhbrb7wXqjMdkDvT52KAwWN/Dj0wVow5zDuzmxcZeX+hVrNdBs4/kB68B9TYQc6kBd/seftjXLawZkI4ZsdnmfzSAF3t7t88r78Co5+QkcTPk9fnSIsIbGuge8OaxeupH6NGHJ/Hjcl+oW+5rG/TVcUawHgj4gjQjeC/dU35vMc3bvcBt3tRKa/NNPTcyNweGbU7MSQTUQ23tphAYw3j6HvYJ4gIkU1a4YdTbQEbLB4Ntm73e9oHJXBRUP9nX7e2b9ApodvfNfzqf07XZwfj9+Pdun84kH9x+5Kl7Ys5JCOQMOWiaCYM1Aa4xDFgwxAQeFwSLvG8SJiQ1JQM+D6zaQFOeciMQN9XhnW/3urnJgbb2jjaQwO3d2Ab2eEymyZB3EBO0PQSeiLzN69G3y0Go+vJ8/pgPCNnX9mRbO6Zr2wePfDogLB1sCA72wcPd2KqEcbX1TUZInTw03t9f1+5aHRALGQhgILdzajIEMLl3amrK4/GEOlIKRe6FZZDSeYOTvgGvt9u3uq0gdG1wG1iTj6UN4RCmNpgtO50RhwEfgZRY9K5QCDgc84B3p5MwhjYHCb2RyAUbXcDDwAje4ADGXR4KwFoGVGHqrDqdy+QwwfMdg4Ne36Rfj/RkyDMzqizdHl0fGOc5lhSqV9Esx7GGdDknWhcMdQDBQMY86kuJbJ+3u9snbx/csVrisQc9yE2CbeiJWK0uNhVjzbp3rM5k8nicVgPSo9B8kTFndgJpfd0hixUbwTBzwHA+jzMvsYTm9LqYC+fb6lnJfGi4eXb9x4kLQezXcwxT9syRzuTtxsgPgsTq6AYZAysfqLdaGKPC6R6OELLgTKPsNZwFInyW79/qWHHQW1z95Mnp0MsHBncyTGTS6+3weic9EWGLA54s8o3derPU91SXcsad6WSj4DSVbkBkgItNevsEgbV5pzEERAcJHFwtFbBsiDaikuhtITAxA4t8xetUgrYPd83Mmwg9MFos5tLRlTCiaeSmQ+OjzbNC/z26dZp0EqCpLsVVRr/UXd4NxCQj9VYPrH1/hGaC3fInJn2mg6t0aZ8gK2vlssgIQs95S+/SKZXDQVPeTnfF0/h62h3pH1X2f8IhqdtfoYJMbcDb5ASH81l7Akbkqn5Ch4HbOMbhDTaNTMw1hcv0yQLr0NV7pJAVmcoIZ+Zcl/KAScIysRoNGFwoMo4jk8Pn/uX98dn1Hhx1u1PSDCfm6Py4yGDVQSPSxIpNoZ/icjyr5Uo1IZO+Fu6klWFByJXysx/cVo+eKy2BVAggj4wBIUSlBGdPiGQ2DhKk19PCQEmzDvz+T8sik38/6yKNEp8P2/BgypUbIuMkq88fMktQpGxeRWS0WXkkUpNrAD4YFyKTQoRuffF4iUSH9IwDXL8Ig1wuxNXhCXG0cXDfCCZ6BQSNNYrs4N1Cf9HWYio2+y6g3r/TjVy1pIXu/WFlBvMgqLz1YM+CLtMzes6Kh+KKIWfNgpx6d09oChvwlauTWEt2YIuAfrRQmlLIb2UZQ3hcwOcGjSzVd4qYGy8PK7swjI6bSOiLW0elFA7PrxtwR0wElqkV+Wt0CgSxzgtuW5XqsU5zaYZUfs3SR0uMB/bIWzfPzQhbC8rd79bS0zfMiDOdA7i5h05d0dE1HikFsy71IKt3SSjgeSsRqXo/jN81jTfmRnYxVTRKpHQkudwo8tMy0cQnMQ3TPPx4STJTIYRTsRk2HCTT+o+SNlhDVWgGBuURG2mDHpldmO5MjdRafWAO03w1b3nR1pKNfpchj+dxrk6udjL9aTnhTh7oUjYPCytY2bU9giod/pEiIizkuxvDsdRckrh1ZKKrD7sMGF1ojwWsGjOt12HN5ogxVdNRHI8IAZptXL5KZz8tERFcjqeFctnpXBSwdANlB0mRB2a78Ang/q5xH6IjFVnKEsZyQhcwpXetSJKUiEmKrMEpZXpETgMOVCC3gXYgI2DtiBFVZEbwoV68A7daEA4kkDScXSeUJHVsgMn5HUKlcLFUCoOlw5Ubd+88Nz5+7maMwQlLZRSc4AYYwwwiYzdcWaaASZWSYgpF1nHkIkwjPUHQLjCicF03nPirq7CrwfhXn8MwX9qN60beWFMxZr0jnf2TysKRASuEPVWT+RhWKKIl8AfnKHMr7Xchi+dGvqygpASFU67p6kKqLIgBd7HBBI4gA0hjZWdChnISkwzu6H3uub99YtJQmuFOIPqGsFAoGac/mxLvFJdY1nGp8zqMxeCYfhdXXqg2Epwv1pPJUCf0+sIZtujDEak5HNBnks5TV5PLy0J9onCZIVcHCTiroCsIxLpZxgrCy0pi/4F16xlJ/oIzR3bMjTz33N55Q14ycl4riHCGKRT8wwMnTpx4Q6gvRVxTiVSLoSdN8ybP1M7JRV6jOV8dcwlOpMppQYK75mZpCzA0bdBZw19E+Zg/dS4HY07hanXsNWiVXyIQ5zS5XDVs0XLYgx5GIOX0LBlD2Nk2YALGE+fxcS8agHV7Pn7PaDayTIoOFer7Gm8Evz80ZPt9q/okboBYxrvLUwODODQ3sJe3q2qhXpTljdCanY+/iUNGIW/oPJ/411cLVyJ9+DcaXiRSXZegMB4ZeLONAXTlNyIDNtQ40gkE44Skw7hKk3hzPvTUlGen/3LCrjFgc1NKEOLsGEuAe0itbf10BZ+b+C6Deq4A6qp3vIPyjg65922VXaQ5X31s4vwsbwzXVKqE5sL2ge6B0OXoo4IkyzqyCuaYbWjl1ocwpUkCxBy2JRosXkLivNeAG2S7Eek50krsYYScuKhGFIduB7v7dp7HJb/MQha2NJdBXgoBm3bo+wtDQwtPq9XHj5px3uSHmnfageq+z4S8iihRI6SULZ4sgMGlsV/mNYs35ZMP/zaWX+HZzSIKpvh32n9T2a/f7gF/iMMVMSock6rYm6BxAy5cMkLnNpJOC/YK6VBUw18G3Ce9Ny7duhy3i4w4GziXQ14GZH85pF04PqTV/l6r1Q6dCPA4iYLXxF2T4Qup1IqomKxmbaczlbNMxelEdj56OX7+oYBQqigX5IOhKGzqFe2KbfkOQYA6dbo84DU5GvFjUrnOEkQEYgjFDODE/m6a9IgJZDkPDJq4Ev/8odNaL8oAABNMSURBVPNC9ocKH002Zo7KlOV46vtq7dNabetxbav25NPqk7+PfwioA9J8KldUpYmbEV0R97z3IWRQN9lxDobmQXd2R5Wg8NkZZGQ46o+A+Rv7sXqjJD0EGbG4kLOBkge5jF8qEDTDnMWMJ2x+HPwUcBfZNXw8lfmpwtVTOZaqVsv7u0OAdSsgr1X/3jbUqv73N7P54SngYf4qGQ3CcNKvREj/yTntOPUokXd+CSwQnY4hWLELKa5eZQXzSbJ/acmCIi5HzFR/hDJHPpjUAHAMSJLTZ9TTlnkCUcx5FT6pkkjlAYkELzwmNF1prb9ks2nV8G+odWEB8D82tBLg8fylEihFQMFp6MhZKYRacG4NA/2BMOlfZCqRww/zMq+yX+pBHM3KsH6TKhC3zNs1CTw4Y/1bcEWZ/X4PrCiLizujfZXCITsB90T8/AUhoX8a3wKmj7SyW3tW3ar1/1B7fEG7Ar/9+tjKivYvr9hFfJbuKhzN05WrxpwZUP5KosjPMMdpPkrdTlEUeyzVjFnCSU24Ugul2P8Gj48U2Wl8S7DO93+UiCtJwGGMgFHEnbFNC2YNfVmlii9qPk5gkr2LUIpkFUFBXbU9QOueloGA166sHB9a0S6oH/iCt2d5XnUBdJPFWmcElZJ+jE/QaKLpJcIes6m/FOHaa5YeKYeXJ9q/YGv9UpCmwh1knfvtxeXbKZBAAYtJTOsAd6A7GLX0ZXs8nrggcOvH+JZaXsL+P2Dn/8wJrXZlYUWr/vfjrUMnfhvXpHDHxp0ZeL1uJ4t8REgu5FPm+dc2sBpW7HbRdRnYfByKIeqsDSTLENzzYToFL2ioZ7WXnkV20wzbE8YHerkzaqdwftB8IZ7QCLmNms8tQhi5huYMIlryh6Ov2Fa0v2tttT3dOmSLkP73NKkkytQxL3HdqBsuXMaY298T4gF/BMxbW7+8ThOCQub0BgX0oVWrv7zLZPjIEqmrrk2JgsK7WUGDkUMs0F09TSHwHw03QMwJa/0jGqMerhGsdmPnjz3RCgzfiovfax+ygGX/r0A9O9aQPGgPY91l0xzxywksJAXtgq7iI3fHWCSRElKQbnpkRX/CbxY4TEsk2MYTDkrUIk2FcZP4fDIbMTJB4IAz6peO4jXGfaTi7TyspkUsQsh3azTCwDMK9vQZQclpter/cOC325hvJITEWZXmcxkql0hfHqZ5zYN2EBWqRRyXIP+4AoiDbyghODfYXayDUVxdOUQLtxJcksYnvC3rSjagkLBlZMGiwsEB3V9CCPxr4yMf4DMsmriJIZGnZpKe2WSkdb8eUrdiXtSeeAXacmK37gKP60PyN1hd3WE0wg/G3Ad4rfC4W0pBUQoBy2W7KmFBenFMqKYA/3vccZWKp/EExdZ5EMhstUZiVgdyY5P+TCsuHSBG+kd51TuLGt4fsbL1SFCjyRw+A7odA9zfEyaEyNejxo8TV17v8dSf9MQ8CKIx8QG2h9/EbgtDg+Gm0C/jFWhPgp9mYgSVJzv7JZhOGnsSL/hy51LqALyvBI/HcIwgZsDrHRERMTJ+JrpGP/i2U8zUbTI8+X0sklqfBsHrJnEhAnyMSAYOEqr7lYcw+VdUWC08uJgyZR1WHVLsX2j9jVBD+Q5uGXO37OyC+jdCVvJtQbhvrACjyyi81+wo4O6QUgzgni5UVFeGHpY5sfMfrAypT9D4b5hQvwU5oFEkoSTFFauqgDMh5Nar4h9dJnTOsMPCSrFD3CoC//crAs+iVYJIbD214tzc2ynhblnXiwwzQOG6DYSVYbGcZ6zIGsQ7rEhSY988B/R7dv6Lf2/NnLw2GpAnNSBizxVT3YvxM0GziHgNnwq/0Mbgr0F+tP6GX5IJhbodjAssSJCmrf8mSlIZqmyo4qjhvQSLQx6UDtMdFi8phAtjdRwQTgHteieuurIrW+8Fno0INX9NVzQf1KvW9y+q0magPSlMnNRAHz3Tqj55lQb9hs16I5Dla1zUYOGqJXck3rzu80ASCfLz9jg83+PpAXt+GvRdALdmqPWiwhxI0X5R/NLlh3ImNX5bBsyE07j4cH0jk6Kp3IlQ1UfTMC6Cdr5mW7jKoB5Q4QQL2LpoHfWnkwtnZThSSTCcoN/QBjJsLMCuGHcgNXP0uHqa07EI1J717Qa84SW7Bhzet6cyXOhwg+lOG43I767Pr6TEn+fOjGk+uhwSzm1bzYCblMLajOc5EHRWpFAINTwIy7W4nRde2NKAOCkGJygK3g48j/cmaMDdwwakRstni3VXYSTQGlbHdk38YLrsGBuOuPVmJ3J9XKfvQjjiquxpWNWF+AXGiDyRsPD2NJkuAQ4wfx1vcOlTZhwdS+DTNgmh8XI1iOsCc2qNiXg9YSCQ4fRx9e/dVoPV6LhRa+M8Cz2WRJpc/GeO9Oa50RNhrfQHiZIjXhXg9byzsarFuMjDRXTCApJdPXkSX7RfBweYtApV0q7ahjTpSwinAKwTdU86smJP6IWiJfTxoUORT60eZMnfYakKPYZs5QLVhanUbhupFzuZG7zIXB/q5mj+MbF4VLM4bRYSfb4+qR5q/RKfqrrdIxHrWGDOsza1GnxXlZ1PHylZl5CXpM9mCnOdcGMDQQ8+7EsMzbgRWTfuDj7ThkYTv5GOTVDICUYhphxRi+sJFMw/FmwH1FUinBtJKcBWUreuaPhkDyatrieGA5Sg4E6KQLOnOb1MSYHaoJAsZyJpGpB1uNa5GzHH1RGEd/HJd+vE3Zo94odd3v9Mp0s5vrgR1wjy11zDLlT0xPPPgtt5oIf9MtZgpPB2qBP7Zal6xxa3nqZO4ulY2J99jZ1Eso4sC9Cm4F9qhPoiPHjK8RBWyjr2NfVLMiR1o546cX8nizq0ItIsOrEipj9TaR5cFDZmbtQgC+G2azBkjgfyCZiJOC4NRv3JZsPaTAqc04PfNInArLHZ3tgPxjyuzYXNzgrFU2pAD6fb8+aFC4vROG+34+qDMYw5kr1me4naA8rOUhfuxKImS/NEzHTefuljUDif3BLZVVc+oVHtlB3p+fOLixdgHIvxRCIeT0S/+OJjf+xd/B5NijakahjQdxOJpITh9Awloylhf5dd5m9dw8+L1+G7SrCS7KENRkfI4b72TiL6n1bBGGOA7hQC64kM1DGhlrSSAMWsghVq4u2ay47pK6B+eJUz4HDUNOh6ekgLAE3TFpNFANyrR1AxAnWRYRmHP3gayI75CM8Jt4ydPBWNb7JWeJ9kNdQL/uLAV9QBm8VoTPdDCuxq09XrKghgjGZsUFUcOJC4AIto8QuVUL1iD/pVI8c2yDxPTJc+KgNr55jtFm+HDmgwdPSEUAz4Ddst3INK8LToDeaLG3BQBLmcuEx3RPYGrv/FurFfVwsciUyFAvsy/jsC5P8XeyoouweVTympAPmlrlzplDzqGGiz36hAgWI97kZ6JCXfsLWqf4Pn+qvUvZGNvekLJ87CCgo6MQMhjDsTA2O5dv5CLBt6t+PKsJQJJB2frt9hjTRkbOnzTH4XExCU4p8Eb00kWrtDKAjwszgxBZfAd70lui5Lt81t7NCnNa19g2EJrmsoO6a+KoT+aj7oEdnT5TpUQmkgYwJcz7TgCzR2Ni1/n8rBGQU+/qNaPaS2/RuXVmZ6MUv9Ua1Vq20v0dl7mbpNz7KQJq8EecKI2QNSDuNeD+phDTayBc2EXe0eA1gkgi8ClveNxqqg558rYHXoBuYY1qa2HeNkknTaB82wCoNNffIwm7c1VFpErRGw5Djb6mSkEnOQekP9x2NHa7PSx/bzNy5cWYyDahNGjiU+fmmNJp641aDacebZfbQJOQRxTp/Fte/EMoJbji/1IJakkUWfq5+CQ9NlakU2AOaccDUEIth6oGQrYEnVFp5vY1sE20aauFCIFKN+6/zljz8/r+JdjbkW+csDZ0lh7UBRQuFNBbeM9WcS0SRb1Cgd2FCYCjlywpXVG50SXDP6NbykaoaTLwh6DO8CxoXgiUW4ANaZXdPoy3ry4yPiiJBuLwFLHodmF77EJp/9KyQx0Ey6yK8klUIarqdEdxXIW2awysw4uRDFbGAv25zV7QXJYtYDigtDANSFOBsYd9EGUS+wfiI41014vx1iF2ytK7hiJah2xNB5AsT4rpNGGwSnJYshi+sEuWMmncNp02rVtnepatVhyRzqqZypFOr4vypqrE/MZVov4DC8RxvE2o5isLfW+qVK9JWigNcluhu4btDGjnYXbCib07SCbsK2IcD9D7Li6nD5j+L9RV6Q6QLqBJ2x6XnVIl1X79nGC3akcV1GIRuW+lrQ4yevFwozMvhIcIMvLRXGK8lTYubcsicCOFcEcK/w0lAMv30PvB9BvV0TpK5xUSP8BT7YR/WVS8tuA5sKUMe/43VIMSfVrXijMe94JGIij9yjF0CRebGO/Li+LLCyol1ZeUlW5d00FqNpz+tvxuPnU5ab41/BFQSIXnjQX8utwInzYlxuOFWe3JiPuhHPdo8VCzr66lkaUWmjBvdhdgq5s5KN8XoK8tCVkPm6ose/MvS7lZUq9myKYobsMTgxbTYGHQ6Hka7NjiRJ5r+0vgB1jmFd068eLPNORNZfWu66JlRKBUN0ngkpKQjGiv1A96EzZQO04O4Edu3aNWXixCyTTgcTBroft8jWEShOD4ihhXkqQN0ygSvFjjjS17JpbMYAzpJvkODiop8Ahj1+/7RVTzK5UUqQkXXHIhFrKogulXlW1EMV1Ht4m3A0ZmRk4gkyhXRKZk3um5ib27Zt9aCn+juEBXQI68HV1YmJfVPzxrxjNASaEIqj/FMKdXFqaEj/2zIHTmqCODvJWdzdj831wsBHtu3LtSdB++bwtZGJHTR+QoZeecD2H2W3UQyPjaTLOYzMyfILWodGmnA5a7hc3eEXHgjjugC4je+EClDXzY2MNTXNGVNjx3dK3dOmdQr1TJJeFvWAUGGst2lsLoc6gX6K6zPgXiPC2KSIC5ZPwdav9qYLlY08kXt1AvwwzqWLlzUdrDEeMaJ3pOdv7BldHuoSCnm2jYw0jexFQjVyCon1Tt365Fq6ZrQ4h7uEPJguPzKyL7cICKT/TmowvZEale7px0ZGUnO3ykrE4izyCE09g2tXjTWN3KgxJjDVVtO9jewqfk+50b9jdfUhVggkkCEPW1INthHUxZmC2Skk/RMpzHfl8zOBrNvwEa/exziiRk/Bh3Atzrltr4LSzZW5xZPqx6fEekdWTZWNLUG2A64PpVCfK1f3mmRZ0qBHFBk00VhsrK+WrDhL8RzHM2GYVhBGxQvIGFjdtu1TV+2ezFanM4KP7aSz25E4U77aEVhd3fZQFecnq2zYT2EMq4HKPjejczgs6aFvBPX8bGTcLMvSZbvjOLKRjsTZoaWewQFklq0ik/LVLOjB6h43OK7ibM3rdUD22EHR4wUGYg6Ka3lXAkk6i7ioGLegeCu/uSvPkkkfHKpm+Ykl2SLn60Q9I+LreRzuakiP5Fqv6+71tb7+utFiVO/Q1lGdWri/zmfExTm7dbW+sXrZ9T5cWim8rofqHMO6Xh9Ud+sbgntckPzP3PrGHm+YHxsB8htFfYOvo/pGx/aNt77B5+/NMP4Xtn4f7sN9uA/34T7ch/twH75p2PL/LaBNArQAbPr/DFKotySSybVNnVHhj2i1Saj64f8swKi3RO8ghpaI453CpXii0s2Adsva/xrcBdQZWTS6tilJCVTvXEpi7hdWgLAK0ouhpSWx1tmy6U7mQuZq5qtl07c6KS15P7JDqbqKESYk2nRXIkPA9FuiLYmvlpJbltdgCSSim5aW4OPkpaW1zmjL8t01OrnUsgYX1paWWoQbOqN3l/Anm6KJtbXE0jeMXTVoiScSm6Jr0bUEwFo0Dr8mNsFvyy3RBPxf6wTebuns7ITf4WoG9c4kE0WJLUuKxJ2Wlqhi6frduGItIUvKtiRv305uuZMkbzNrLWuKtTX67tIWZsvtpAIuRGVJyZaW5B06+RVzm0mgpOQ2k+z89lBPJr9KbLrduXR9LZlILt9eSiburN1eu5XsvH59rfM2EOv60tJXiaU1uJr8qiWLumITseV2C0owLZ2J2/+1nLz71Za7d+8kOplNW2RbFFuSCaAyXFtOdt7dcgeQxxfWkrdhKmWJzk3M2ha0JvsvMrF0+1tF/e7alttbki3JzmVgwMQSzEUyuRTvvL58veV24quvkktLcA2mJLmW3JRGHRg+evu2okWydhv4QQHzspSMJphEYsuduy2yLcym5Nrdu9HkUifM451OJioDjgc+lyU2xTcBH3x1J7mGlsktPYD6t7faW9ZgkW5a61yDr0R0eSl+PbqEuT/aAqzfsty5lloJy7Aw1xJrGapHO2VMCzDL7SSsipa1O0tb1uCzu3foSy131pJbklvuJpbXvkpGN3XevXOrM9mZ3LIEDXSu3bl7fSlB30lE7zBriTtb7sBEf4uCDtYqaN605AWhC4sb/sb6WriGlzqWfls2ZYUfRn1TQoEYdDsqKLWWzpaUyAaRsKlTuL0lK+Q7U9JTuANuhO+dcEm4E/79D7OKBJOmpQW4oCUa/bYH8+eFrCG76dtVy98CoG97AN8e/D9xAjm/q3m8UAAAAABJRU5ErkJggg==");  
      background-size: 500px 315px;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.2); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #669999;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #669999;
      color: #669999;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid  #669999;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #669999;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background:  #669999;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background:  #a3c2c2;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      .popup {
        position: relative;
        display: inline-block;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
  
      /* The actual popup */
      .popup .popuptext {
        visibility: hidden;
        width: 160px;
        background-color: #555;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 8px 0;
        position: absolute;
        z-index: 1;
        bottom: 125%;
        left: 50%;
        margin-left: -40px;
      }
  
      /* Popup arrow */
      .popup .popuptext::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: #555 transparent transparent transparent;
      }
      
      /* Toggle this class - hide and show the popup */
      .popup .show {
        visibility: visible;
        -webkit-animation: fadeIn 1s;
        animation: fadeIn 1s;
      }
      .hide {
        visibility: hidden;
      }
      
      /* Add animation (fade in the popup) */
      @-webkit-keyframes fadeIn {
        from {opacity: 0;} 
        to {opacity: 1;}
      }
      
      @keyframes fadeIn {
        from {opacity: 0;}
        to {opacity:1 ;}
      }
    </style>
  </head>
  <body>
    <div class="testbox">
      <form action="med.php" onsubmit="return myFunction(this)">
        <div class="banner">
          <h1>Student Medical Form</h1>
        </div>
        <br/>
        <fieldset>
          <legend>Student Medical Information</legend>
          <div class="item">
            <div class="popup">
              <span class="popuptext" id="check_MIS">MIS should be 9 digits only</span>
            </div>
            <label for="mis"> Student MIS Number<span>*</span></label>
            <input id="mis" type="text" name="mis" required/>
          </div>
          <div class="item">
            <div class="popup">
              <span class="popuptext" id="check_bg">Invalid Blood Group</span>
            </div>
            <label for="bg">Blood Group<span>*</span></label>
            <input id="bg" type="text" name="bg" required/>
          </div>
          <div class="question">
            <label>Do you have any physical disability?</label>
            <div class="question-answer">
              <div>
                <input type="radio" value="yes" id="radio_1" name="dis"/>
                <label for="radio_1" class="radio"><span>Yes</span></label>
              </div>
              <div>
                <input  type="radio" value="no" id="radio_2" name="dis" checked/>
                <label for="radio_2" class="radio"><span>No</span></label>
              </div>
            </div>
          </div>
          <div class="item">
            <label for="dinfo"> Information about kind of disability</label>
            <input id="dinfo" type="text" name="dinfo"/>
          </div>
        </fieldset>
        <br/>
        <fieldset>
          <legend>Covid Vaccination Information</legend>
          <div class="question">
            <label>Status of Vaccination</label>
            <div class="question-answer">
              <div>
                <input type="radio" value="first" id="radio_5" name="dose"/>
                <label for="radio_5" class="radio"><span>First Dose Done</span></label>
              </div>
              <div>
                <input  type="radio" value="second" id="radio_3" name="dose" checked/>
                <label for="radio_3" class="radio"><span>Both Doses Done</span></label>
              </div>
              <div>
                <input  type="radio" value="nodose" id="radio_4" name="dose"/>
                <label for="radio_4" class="radio"><span>No Dose Received</span></label>
              </div>
            </div>
          </div>
        </fieldset>
        <div class="btn-block">
          <button type="submit" href="/">Submit</button>
        </div>
      </form>
    </div>
  </body>
</html>
