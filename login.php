<!-- 상단헤더 연결 -->
<?php
  include('./sub/header.php');
?>
<main>
  <form name='로그인' method='post' action='login_check.php'>
    <fieldset>
      <legend>로그인</legend>
      <p>
        <label for='id_txt'></label>
        <input type='text' id='id_txt' name='id_txt' placeholder='아이디를 입력해주세요'>
      </p>
      <p>
        <label for='pw_txt'></label>
        <input type='password' id='pw_txt' name='pw_txt' placeholder='비밀번호를 입력해주세요'>
      </p>
      <p>
        <input type='checkbox' id='id_save'>
        <label for='id_save'>아이디 저장</label>
      </p>
      <p>
        <input type='submit' value='로그인' id='login_btn' name='login_btn'> 
      </p>
      <p>
        <a href='#' title='아이디 찾기'>아이디 찾기</a>
        <a href='#' title='비밀번호 찾기'>비밀번호 찾기</a>
        <a href='./php/register.php' title='회원가입'>회원가입</a>
      </p>
      
    </fieldset>
  </form>
</main>
<!-- 제이쿼리 -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<!-- 제이쿼리 쿠키 -->
<script src="./script/jquery.cookie.js"></script>

<script>
  $(document).ready(function(){
    //1. 쿠키이름 저장(개발자가 알아서)
    let key = $.cookie('idChk');

    //2. 만약에 브라우저에 key변수에 값이 저장되어 있다면
    if(key){
      $('#id_txt').val(key);  //id가 id박스안에 표시되어야 한다.
      $('#id_save').prop('checked',true); //체크박스에 체크를한다.
    }

    //3. 체크박스를 체크하지 않고 다시 체크를 풀경우(쿠키 저장하지 않겠다/삭제)
    $('#id_save').change(function(){  //체크박스의 상태가 변경되면 아래내용 실행
      if($(this).is(':checked')){
        $.cookie('idChk', $('#id_txt').val(),{expires:7, path:'/'});    //쿠키를 생성하고
      }else{  //그렇지 않으면
        $.removeCookie('idChk',{path:'/'});  //쿠키를 삭제한다.
      }
    });

    // 4. 아이디 입력시 쿠키생성
    $('#id_txt').keyup(function(){
      if($('#id_save').is(':checked')){
        $.cookie('idChk',$('#id_txt').val(),{expires:7, path:'/'});
      }
    });

    if($('#id_txt').val() !=""){ //만약에 id값이 있다면
       //체크박스에 체크를 해둔다.
    }
    

  });

</script>

<!-- 하단 푸터 연결 -->
<?php
  include('./sub/footer.php');
?>
