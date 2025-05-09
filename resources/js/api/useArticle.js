import { gql } from '@apollo/client/core'
import apolloClient from '../apollo'
import axios from 'axios'

const CREATE_ARTICLE = gql`
  mutation CreateArticle($input: CreateArticleInput!) {
    createArticle(input: $input) {
      id
      title
      slug
    }
  }
`

export function useArticle() {
  async function createArticle({ title, content, image }) {
    const slug = title.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-|-$/g, '')

    const formData = new FormData()
    formData.append('title', title)
    formData.append('slug', slug)
    formData.append('content', content)
    formData.append('image', image)

    // Upload the image first (Laravel route)
    const imageUpload = await axios.post('/api/upload-article-image', formData, {
      headers: { 'Content-Type': 'multipart/form-data' },
    })

    const imageUrl = imageUpload.data.path

    return apolloClient.mutate({
      mutation: CREATE_ARTICLE,
      variables: {
        input: { title, slug, content, image: imageUrl },
      },
    })
  }

  return { createArticle }
}
