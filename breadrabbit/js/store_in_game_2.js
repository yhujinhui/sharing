            // 게임 상태
            var gameState = '';
 
            // 열린 카드 src
            var openCardId = '';
            var openCardId2 = '';
 
            // 난수 생성 함수
            function generateRandom (min, max) {
                var ranNum = Math.floor(Math.random()*(max-min+1)) + min;
                    return ranNum;
            }
 
            
            var cards; // 카드 목록
            var score = 0; // 점수
            var openedCtn = 0; // 맞춘 카드 갯수
            
            // 카드 배치
            function setTable(){
                cards = [
                '1.jpg','1.jpg', // 나옹이
                '2.jpg','2.jpg', // 파이리
                '3.jpg','3.jpg', // 꼬부기
                '4.jpg','4.jpg', // 이상해씨
                '5.jpg','5.jpg', // 어니부기
                '6.jpg','6.jpg', // 잉어킹
                '7.jpg','7.jpg', // 푸린
                '8.jpg','8.jpg', // 피카츄
                '9.jpg','9.jpg', // 별가사리
                '10.jpg','10.jpg', // 거북왕
                '11.jpg','11.jpg', // 고라파덕
                '12.jpg','12.jpg' // 리자드
                ];
                var cardTableCode = '<tr>';                
                for(var i=0;i<20;i++) {
                    if(i>0 && i%5 == 0){
                        cardTableCode += '</tr><tr>';
                    }
                    var idx = generateRandom(0,19-i);
                    var img = cards.splice(idx,1);
 
                    cardTableCode += '<td id="card'+i+'"><img src="'+img+'"><span>?</span></td>';
                }
                cardTableCode += '</tr>';
                $('#cardTable').html(cardTableCode);
            }
 
            // 카드 전체 가리기
            function hiddenCards(){
                $('#cardTable td img').hide();
                $('#cardTable td span').show();
            }
 
            // 게임 시작
            function startGame() {
                var sec = 6;
                
                $('#info').hide(); // 안내 문구 가리기
                scoreInit(); // 점수 초기화
                setTable(); // 카드 배치
                
                //카운트 다운
                function setText(){
                    $('#countDown').text(--sec);
                }
 
                //카운트 다운
                var intervalID = setInterval(setText, 1000);
                setTimeout(function(){
                    clearInterval(intervalID);
                    $('#countDown').text('start');
                    hiddenCards();
                    gameState = '';
                }, 6000);
            }
 
 
            // 카드 선택 시
            $(document).on('click', '#cardTable td', function(){
                if(gameState != '') return; // 게임 카운트 다운중일 때 누른 경우 return
                if(openCardId2 != '') return; // 2개 열려있는데 또 누른 경우 return
                if($(this).hasClass('opened')) return; // 열려있는 카드를 또 누른 경우                
                $(this).addClass('opened'); // 열여있다는 것을 구분하기 위한 class 추가
 
                if(openCardId == '') {
                    $(this).find('img').show();
                    $(this).find('span').hide();
                    openCardId = this.id;
                }else {
                    if(openCardId == openCardId2) return; //같은 카드 누른 경우 return
 
                    $(this).find('img').show();
                    $(this).find('span').hide();
                    
                    var openCardSrc = $('#'+openCardId).find('img').attr('src');
                    var openCardSrc2 = $(this).find('img').attr('src');
                    openCardId2 = this.id;
                    
                    if(openCardSrc == openCardSrc2) { // 일치
                        openCardId = '';
                        openCardId2 = '';
                        scorePlus();
                        if(++openedCtn == 12){
                            alert('성공!!\n'+score+'점 입니다!');
                        }
                    }else { // 불일치
                        setTimeout(back, 1000);
                        scoreMinus();
                    }
                }
            });
 
            // 두개의 카드 다시 뒤집기
            function back() {
                $('#'+openCardId).find('img').hide();
                $('#'+openCardId).find('span').show();
                $('#'+openCardId2).find('img').hide();
                $('#'+openCardId2).find('span').show();
                $('#'+openCardId).removeClass('opened');
                $('#'+openCardId2).removeClass('opened');
                openCardId = '';
                openCardId2 = '';
            }
 
            // 점수 초기화
            function scoreInit(){
                score = 0;
                openedCtn = 0;
                $('#score').text(score);
            }
            // 점수 증가
            function scorePlus(){
                score += 10;
                $('#score').text(score);
            }
            // 점수 감소
            function scoreMinus(){
                score -= 5;
                $('#score').text(score);
            }
 
            $(document).on('click', '#startBtn', function(){
                if(gameState == '') {
                    startGame();
                    gameState = 'alreadyStart'
                }
            });
 
 