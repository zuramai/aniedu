<template>
    <div class='minigames pb-32'>
        <div class="soal text-white text-center mt-16">
            <h1>{{ question.number1 }} x {{ question.number2 }}</h1>
        </div>
        <div class="choices flex mt-24  ">
            <div class="w-1/3 flex justify-center" v-for="choice in question.choices" :key="choice">
                <button @click="answer(choice)" class='border text-center w-32 h-32 text-white text-3xl rounded-full hover:bg-white hover:text-green-600 border-white bg-none'>{{choice}}</button>
            </div>
        </div>
        <div class="time-wrapper">
            <img src="/images/illustration/waktu.png" class='image-waktu'>
            <div class="timebar ">
                <div class="progress-time" :style="{ width: `${time_left/60*100}%`}"></div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        user: String,
        subject: String
    },
    mounted() {
        this.generateQuestion();

        // run the time
        let interval = setInterval(() => {
            this.time_left -= 0.1
            if(this.time_left < 0) {
                this.storeScore();
                clearInterval(interval);
            }
        }, 100)
    },
    data: () => ({
        question: {},
        score: 0,
        score_per_question: 2,
        time_left: 60
    }),
    methods:{
        generateQuestion() {
            let getRandomNumber = () => Math.floor(Math.random() * 9) + 1;
            function shuffleArray(array) {
                for (var i = array.length - 1; i > 0; i--) {
                    var j = Math.floor(Math.random() * (i + 1));
                    var temp = array[i];
                    array[i] = array[j];
                    array[j] = temp;
                }
            }

            let number1 = getRandomNumber();
            let number2 = getRandomNumber();

            let question = {
                number1,
                number2,
                choices: [getRandomNumber() * getRandomNumber(), number1 * number2, getRandomNumber() * getRandomNumber()]
            }
            shuffleArray(question.choices);

            this.question = question;
        },
        answer(choice) {
            if(choice == this.question.number1 * this.question.number2) {
                // correct
                this.score += this.score_per_question;
            }
            this.generateQuestion();
        },
        storeScore() {
            fetch('/api/minigames', {
                method: 'POST',
                mode: 'same-origin',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    user_id: this.user,
                    score: this.score,
                    subject: this.subject
                })
            })
            .then(res => res.json())
            .then(data => {
                console.log(data)
                window.location = "/game/leaderboard?subject="+this.subject
            });
        }
        
    }
}
</script>
<style lang="scss">
    .time-wrapper {
        margin-top: 4rem;
        display: flex;
        align-items: center;
        position: absolute;
        bottom: 5rem;
        left: 0;
        right: 0;
        width: 80%;
        margin: 0 auto;
    }
    .timebar {
        background-color: #ccc;
        height: 2rem;
        border-radius: 1rem;
        border: 2px solid #b66713;
        flex-grow: 1;
        margin-left: 1rem;
    }
    .progress-time {
        height: 100%;
        background-color: #ff8500;
        border-radius: 1rem;
    }
    .image-waktu {
        width: 50px;
        height: 100%;
    }
</style>