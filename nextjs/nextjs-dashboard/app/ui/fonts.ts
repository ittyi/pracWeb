import { Inter, Lusitana } from 'next/font/google';

export const inter = Inter({ subsets: ['latin'] });

// export const lusitana = Lusitana({weight: "400"})
// 模範解答
export const lusitana = Lusitana({
	weight: ['400', '700'],
	subsets: ['latin'],
})
