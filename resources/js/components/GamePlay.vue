<template>
    <div class='question-wrapper'>
        <div class="time absolute text-4xl text-white">{{ countdownFormat }}</div>
        <div class="question">
            <h2 class='text-white text-6xl'>{{ currentQuestion.question }}</h2>
        </div>
        <div class="choices mt-3">
            <div class="choice" v-for="(choice,index) in currentQuestion.choices" :key="choice.id">
                <a href="#" class='block text-white pl-5 py-2 text-4xl transform transition duration-100 hover:translate-x-1' @click.prevent="chooseAnswer(currentQuestion.id, choice.id, choice.is_correct)">{{choiceAlphabet[index]}}. {{ choice.answer }}</a>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        questionList: {
            type: String
        },
        subject: {
            required: true
        },
        user_id: {
            required: true
        },
        startNyawa: {
            required: false,
            default: 3
        }
    },
    data: () => ({
        choiceAlphabet: ['a','b','c','d'],
        questions: [],
        countdown: 300,
        currentQuestionNumber: 0,
        userAnswers: []
    }),
    mounted() {
        this.$store.commit("UPDATE_NYAWA", this.startNyawa)
        this.questions = JSON.parse(this.questionList)
        setInterval(() => {
            if(!this.countdown) {
                this.storeAnswers();
                clearInterval(this)
            };
            this.countdown--;
        }, 1000);
    },
    methods: {
        chooseAnswer(questionID, choice_id,is_correct) {
            if(!is_correct) this.$store.commit("MINUS_NYAWA")

            if(this.$store.state.nyawa == 0) window.location = "/game/gameover"

            this.userAnswers.push({choice_id, is_correct});
            
            this.currentQuestionNumber++;
            if(this.currentQuestionNumber >= this.questions.length) {
                return this.storeAnswers();
            }
        },
        storeAnswers() {
            console.log('store')
            fetch('/api/store-answers', {
                method: 'POST',
                mode: 'same-origin',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    answers: this.userAnswers,
                    user_id: this.user_id
                })
            })
            .then(res => res.json())
            .then(data => {
                console.log(data)
                window.location = "/game/minigames?subject="+this.subject
            });
        }
    },
    computed: {
        currentQuestion() {
            return this.questions[this.currentQuestionNumber] || {};
        },
        countdownFormat() {
            let minutes = Math.floor(this.countdown / 60);
            let secs = this.countdown % 60;
            secs = secs.toString().padStart(2, '0');

            return `${minutes}:${secs}`
        }
    }
}
</script>
<style >
    .time {
        top: 3rem;
        left: 50%;
        transform: translateX(-50%);
    }
</style>