<template>
  <div class="problem-component pb-16 pt-16" v-if="dataProblems && csvData">
    <div class="problem-component__content wrapper">
      <h2 class="text-center pb-8">{{dataProblems.name}}</h2>
      <p class="problem-component__problem pb-4">Есеп берілгені</p>
      <p style="color: #000000" class="font-normal pb-6" v-if="dataProblems.description"></p>
      <div class="problem-component__block">
        <div class="problem-component__container">
          <div class="problem-component__output">
            <p>Оқитын деректер (in_{{$route.params.id}}.csv)</p>
            <p v-html="csvData.input"></p>
            <button class="button__black max-w-[360px]" @click="downloadCSV">
              Тест деректерін жүктеп алу (in_{{$route.params.id}}.csv)
            </button>
          </div>
          <div class="problem-component__input">
            <p>Сыртқа шығатын деректер (out_{{$route.params.id}}.csv)</p>
            <p v-html="csvData.output"></p>
          </div>
        </div>
        <div class="problem-component__upload  pt-16 pb-16">
          <form @submit.prevent="uploadProblem" class="problem-component__form">
            <span id="file-chosen">Төменде out_{{$route.params.id}}.csv файлын өткізіңіз</span>
            <input type="file" id="actual-btn" hidden @change="handleFileChange"/>
            <label for="actual-btn" class="problem-component__button">Есепті өткізу</label>
            <span class="text-[#FF4242]">{{chosenFileName}}</span>
            <button class="button__primary" type="submit">
              Өткізу
            </button>
            <p><span class="text-[#000000] text-xl font-normal">Тестілеуден өту пайызы:</span> <span class="text-[#25D366] text-xl font-normal">{{resultProblem?.percentage ? resultProblem?.percentage : 0}}%</span></p>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "Id",
  data() {
    return {
      dataProblems: undefined,
      chosenFile: null,
      csvData: undefined,
      resultProblem: undefined
    };
  },
  computed: {
    chosenFileName() {
      return this.chosenFile ? this.chosenFile.name : '';
    },
  },
  methods: {
    downloadCSV() {
      const csvContent = this.generateCSVContent();
      const blob = new Blob([csvContent], { type: 'text/csv' });
      const url = URL.createObjectURL(blob);
      const link = document.createElement('a');
      link.href = url;
      link.setAttribute('download', 'data.csv');
      link.style.display = 'none';
      document.body.appendChild(link);
      link.click();
      document.body.removeChild(link);
    },
    generateCSVContent() {
      return this.csvData.csvData.map(row => row.join(',')).join('\n');
    },
    handleFileChange(event) {
      this.chosenFile = event.target.files[0];
    },
    async uploadProblem() {
      if(this.chosenFile.name !== `out_${this.$route.params.id}.csv`) {
        this.$toast.open({
          message: `Имя файла должен быть: out_${this.$route.params.id}.csv`,
          type: "warning"
        })
        return;
      }
      try {
        const formData = new FormData();
        formData.append('q', this.$route.params.id);
        formData.append('fileToUpload', this.chosenFile, this.chosenFile.name);

        const res = await axios.post('/post-check-problem.php', formData);
        this.$toast.open({
          message: res.data.message,
          type: res.data.success ? "success" : "warning"
        })
        this.resultProblem = res.data
      } catch (e) {
        this.$toast.open({
          message: e.message,
          type: "error"
        })
      }
    },
    async getUserRate(question_number) {
      try {
        const response = await axios.post('/get-user-rate.php', {
          params: {
            question_number
          }
        });
        this.resultProblem = response.data.data
      } catch (e) {
        console.log(e)
        this.$toast.open({
          message: e.message,
          type: "error"
        })
      }
    }
  },
  async mounted() {
    await axios.get('/get-problems.php').then(res => {
      this.dataProblems = res.data.find(item => item.id === this.$route.params.id)
    }).catch(e => {
      console.log('error', e)
    })
    await axios.get('/get-problem-csv.php', {
      params: {
        id: this.$route.params.id
      }
    }).then(res => {
        this.csvData = res.data
    }).catch(e => {
      console.log('error', e)
    })
    await this.getUserRate(this.$route.params.id)
  }
}
</script>

<style scoped lang="scss">
.problem-component {
  &__content {

  }
  &__block {
    display: grid;
    gap: 32px;
  }
  &__problem {
    font-weight: 700;
    font-size: 20px;
    color: #000000;
  }
  &__container {
    display: grid;
    grid-template-columns: auto 420px;
    gap: 24px;
  }
  &__output {
    background: #D7E8F0;
    border-radius: 15px;
    padding: 24px 32px;
    display: grid;
    gap: 14px;
    p {
      font-style: normal;
      font-weight: 500;
      font-size: 20px;
      color: #000000;
    }
  }
  &__input {
    background: #2079FF;
    border-radius: 15px;
    padding: 24px 32px;
    display: grid;
    gap: 14px;
    p {
      font-style: normal;
      font-weight: 500;
      font-size: 20px;
      color: #FFFFFF;
    }
  }
  &__form {
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
    width: 100%;
    max-width: 420px;
    gap: 16px;
  }
  &__button {
    width: 100%;
    max-width: 160px;
    padding: 12px 20px;
    border-radius: 30px;
    transition-duration: 0.3s;
    outline: none;
    font-weight: 600;
    font-size: 16px;
    line-height: 1.3;
    color: #FFFFFF;
    margin: 0 auto;
    background-color: #FF4242;
    &:hover {
      box-shadow: 0 0 20px #FF4242;
    }
  }
  &__upload {
    display: flex;
    justify-content: end;
  }
  @media screen and (max-width: 768px) {
    &__container {
      grid-template-columns: 1fr;
    }
    &__upload {
      justify-content: center;
    }
  }
}
</style>
