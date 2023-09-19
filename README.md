# Walker-holic
>만보기 토이 프로젝트로 php와 xampp로 구현하였습니다.


## 제작 기간
>2023.07.03 ~ 2023.07.14 (2주간)


## 시작 가이드
- xampp(8.2.4) 설치 유저테이블과 걸음수 테이블을 만들어야합니다
- 파일들의 sql구문의 테이블 명을 동일하게 변경해야합니다.
- 실행을 localhost로 진행하였습니다.


## 주요 기능 📦


###  회원가입 및 로그인
- php를 통해 개인db에 저장

###  걸음 수 등록 및 확인
- 걸음 수를 개인db에 저장
- 저장된 걸음 수를 한 주 분량을 차트를 통해서 가시적으로 보여준다

## 화면 구성 📺
| 메인 페이지  |  로그인 페이지   |
| :-------------------------------------------: | :------------: |
| <img width="329" src=https://github.com/ITak21/Walker-holic/assets/118645678/30053cd1-125b-4b62-9548-6407fd46123d/>|  <img width="329" src=https://github.com/ITak21/Walker-holic/assets/118645678/e384c89a-7ed8-4316-983a-ebc5eba67a35/>|  
| 회원가입 페이지  |   로그인 후 메인 페이지   |  
| <img width="329" src=https://github.com/ITak21/Walker-holic/assets/118645678/5abcb4c8-292d-44df-ae09-e0e5ed6174c7/>| <img width="329" src=https://github.com/ITak21/Walker-holic/assets/118645678/b056afb2-9086-4074-87e3-4978084057ec/>|
| 입력 후 메인 페이지  |
| <img width="329" src=https://github.com/ITak21/Walker-holic/assets/118645678/a6220981-711c-4c62-a85b-183f33075b28>|

## 단위 테스트
- 한 주간의 걸음 수를 출력시 테이블에 이전 날짜의 값이 없을 경우 요일이 잘못 출력됨
- (ex) 오늘은 화요일인데 월요일 기록이 없어 차트에서는 화요일 기록이 월요일에 들어가 있게 된다.
- 추후 업데이트 예정
