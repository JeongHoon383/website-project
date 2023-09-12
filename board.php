<?php include "sub-header.php" ?>

<h2 class="sub_title">자유게시판</h2>
<div class="sub_summary">
  <p class="emphasis">선샤인 자유게시판입니다.</p> <br>
  <p>앞으로 좀 더 많은 서비스를 제공해 드릴것을 약속 드리겠습니다.</p>
</div>
<section class="board">
  <table>
    <thead>
      <tr>
        <th scope="col">번호</th>
        <th scope="col">제목</th>
        <th scope="col">작성자</th>
        <th scope="col">작성일자</th>
        <th scope="col">조회수</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>5</td>
        <td>자유게시판 테스트글 5번</td>
        <td>관리자</td>
        <td>2023-08-08</td>
        <td>42</td>
      </tr>
      <tr>
        <td>4</td>
        <td>자유게시판 테스트글 5번</td>
        <td>관리자</td>
        <td>2023-08-08</td>
        <td>64</td>
      </tr>
      <tr>
        <td>3</td>
        <td>자유게시판 테스트글 5번</td>
        <td>관리자</td>
        <td>2023-08-08</td>
        <td>86</td>
      </tr>
      <tr>
        <td>2</td>
        <td>자유게시판 테스트글 5번</td>
        <td>관리자</td>
        <td>2023-08-08</td>
        <td>93</td>
      </tr>
      <tr>
        <td>1</td>
        <td>자유게시판 테스트글 5번</td>
        <td>관리자</td>
        <td>2023-08-08</td>
        <td>123</td>
      </tr>
    </tbody>
  </table>

  <form>
    <select>
      <option label="제목"></option>
      <option label="작성자"></option>
      <option label="내용"></option>
    </select>
    <input type="text" title="검색어를 입력">
    <button>검색</button>
  </form>
</section>

<?php include "sub-footer.php" ?>